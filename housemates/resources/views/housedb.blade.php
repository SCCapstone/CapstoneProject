<!DOCTYPE html>
<html>
    <head>
        <title>Housemates</title>
    </head>
    <body>
        <?php
            if(DB::connection()->getPDO()) {
                echo "Successfully connected to database => "
                    .DB::connection()->getDatabaseName();
                echo nl2br("\n\nContact Info:\n");
                $contactInfo = DB::select('select * from contactinfo');
                foreach ($contactInfo as $contactinfo) {
                    echo nl2br("\nName: ");
                    echo $contactinfo->name;
                    echo nl2br("\nPhone: ");
                    echo $contactinfo->phone;
                    echo nl2br("\nEmail: ");
                    echo $contactinfo->email;
                    echo nl2br("\nGmail: ");
                    echo $contactinfo->gmail;
                    echo nl2br("\nEmergency Phone: ");
                    echo $contactinfo->emergencyPhone;
                    echo nl2br("\nInstagram: ");
                    echo $contactinfo->instagram;
                    echo nl2br("\nSnapchat: ");
                    echo $contactinfo->snapchat;
                    echo nl2br("\nVenmo: ");
                    echo $contactinfo->venmo;
                }
                echo nl2br("\n\nGrocery List:\n");
                $groceryList = DB::select('select * from grocery_list');
                foreach ($groceryList as $grocery) {
                    echo nl2br("\nUser: ");
                    echo $grocery->user;
                    echo nl2br("\nFood: ");
                    echo $grocery->food;
                    echo nl2br("\nDrinks: ");
                    echo $grocery->drinks;
                    echo nl2br("\nSupplies: ");
                    echo $grocery->supplies;
                    echo nl2br("\nOther: ");
                    echo $grocery->other;
                }
                echo nl2br("\n\nReminders:\n");
                $reminders = DB::select('select * from reminders');
                foreach ($reminders as $remind) {
                    echo nl2br("\nAssignments: ");
                    echo $remind->assignments;
                    echo nl2br("\nMeetings: ");
                    echo $remind->meetings;
                    echo nl2br("\nBills: ");
                    echo $remind->bills;
                }
                echo nl2br("\n\nUsers:\n");
                $users = DB::select('select * from users');
                foreach ($users as $user) {
                    echo nl2br("\nName: ");
                    echo $user->name;
                    echo nl2br("\nEmail: ");
                    echo $user->email;
                    echo nl2br("\nPassword: ");
                    echo $user->password;
                }
            }
        ?>
    </body>
</html>