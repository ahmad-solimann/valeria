<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER tr_Sync_Insert_Users AFTER INSERT ON `users` FOR EACH ROW
            BEGIN
                IF NEW.ID NOT IN (SELECT ID FROM wp_valeria.copy_users) THEN
                    INSERT INTO wp_valeria.copy_users (`id`,`username`,`password`,`email`, `created_at`, `updated_at`)
                    VALUES (NEW.id,NEW.username,NEW.password, NEW.email, now(), null);
                END IF;
            END
        ');
        DB::unprepared('
        CREATE TRIGGER tr_Sync_Delete_Users AFTER DELETE ON `users` FOR EACH ROW
            Begin
                IF OLD.ID IN (SELECT ID FROM wp_valeria.copy_users) THEN
                    DELETE FROM wp_valeria.copy_users
                    WHERE ID IN(SELECT OLD.id FROM users);
                END IF;
            END
        ');
        DB::unprepared('
        CREATE TRIGGER tr_Sync_Update_Users AFTER Update ON `users` FOR EACH ROW
            BEGIN
                    IF NEW.ID NOT IN
                    (SELECT ID from wp_valeria.copy_users
                    WHERE
                        `username`= NEW.username 
                    AND `password`= NEW.password
                    AND `email`= NEW.email
                    )THEN
                        UPDATE wp_valeria.copy_users
                            SET
                           `username` = NEW.username,
                           `password` = NEW.password,
                           `email` = NEW.email,
                           `updated_at` = now()
                           WHERE
                           ID = NEW.ID;
                   END IF;
            END
        ');


        DB::connection('mysql2')->unprepared('
        CREATE TRIGGER tr_wp_Sync_Insert_Users AFTER INSERT ON `copy_users` FOR EACH ROW
            BEGIN
                IF NEW.ID NOT IN (SELECT ID FROM valeria_sys.users) THEN
                    INSERT INTO valeria_sys.users (`id`,`username`,`password`,`email`, `created_at`, `updated_at`)
                    VALUES (NEW.id,NEW.username,NEW.password, NEW.email, now(), null);
                    INSERT INTO valeria_sys.notifications 
                            (`id`,`type`,`notifiable_type`,`notifiable_id`,`data`,`created_at`,`updated_at`)
                    VALUES  (UUID(),"App\\\\Notifications\\\\RegisteredUser","App\\\\Models\\\\User","1",NEW.id,now(),null);
                END IF;
            END
        ');
        DB::connection('mysql2')->unprepared('
        CREATE TRIGGER tr_wp_Sync_Delete_Users AFTER DELETE ON `copy_users` FOR EACH ROW
            Begin
                IF OLD.ID IN (SELECT ID FROM valeria_sys.users) THEN
                    DELETE FROM valeria_sys.users
                    WHERE ID IN(SELECT OLD.id FROM copy_users);
                END IF;
            END
        ');
        DB::connection('mysql2')->unprepared('
        CREATE TRIGGER tr_wp_Sync_Update_Users AFTER Update ON `copy_users` FOR EACH ROW
            BEGIN
                IF NEW.ID NOT IN
                    (SELECT ID from valeria_sys.users
                    WHERE
                        `username`= NEW.username 
                    AND `password`= NEW.password
                    AND `email`= NEW.email
                    )THEN
                        UPDATE valeria_sys.users
                        SET
                        `username` = NEW.username,
                        `password` = NEW.password,
                        `email` = NEW.email,
                        `updated_at` = now()
                         WHERE
                         ID = NEW.ID;
                END IF;
            END
        ');


        /*
         * drop TRIGGER if EXISTS tr_wp_Sync_Insert_Users;
           drop TRIGGER if EXISTS tr_wp_Sync_Delete_Users;
           drop TRIGGER if EXISTS tr_wp_Sync_Update_Users;
           drop TRIGGER if EXISTS tr_Sync_Insert_Users;
           drop TRIGGER if EXISTS tr_Sync_Delete_Users;
           drop TRIGGER if EXISTS tr_Sync_Update_Users;
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tr_Sync_Insert_Users`');
        DB::unprepared('DROP TRIGGER `tr_Sync_Delete_Users`');
        DB::unprepared('DROP TRIGGER `tr_Sync_Update_Users`');
        DB::connection('mysql2')->unprepared('DROP TRIGGER `tr_wp_Sync_Insert_Users`');
        DB::connection('mysql2')->unprepared('DROP TRIGGER `tr_wp_Sync_Delete_Users`');
        DB::connection('mysql2')->unprepared('DROP TRIGGER `tr_wp_Sync_Update_Users`');
    }
}
