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
                    echo nl2br("\nFirst Name: ");
                    echo $contactinfo->firstName;
                    echo nl2br("\nLast Name: ");
                    echo $contactinfo->lastName;
                    echo nl2br("\nPhone: ");
                    echo $contactinfo->phone;
                    echo nl2br("\nEmail: ");
                    echo $contactinfo->email;
                    echo nl2br("\nGmail: ");
                    echo $contactinfo->gmail;
                    echo nl2br("\nAddress: ");
                    echo $contactinfo->address;
                    echo nl2br("\nEmergency Contact Name: ");
                    echo $contactinfo->emergencyName;
                    echo nl2br("\nEmergency Contact Phone: ");
                    echo $contactinfo->emergencyPhone;
                    echo nl2br("\nEmergency Contact Relation: ");
                    echo $contactinfo->emergencyRelation;
                    echo nl2br("\nInstagram: ");
                    echo $contactinfo->instagram;
                    echo nl2br("\nSnapchat: ");
                    echo $contactinfo->snapchat;
                    echo nl2br("\nVenmo: ");
                    echo $contactinfo->venmo;
                    echo nl2br("\nTikTok: ");
                    echo $contactinfo->tiktok;
                    echo nl2br("\nRoommate 1 Email: ");
                    echo $contactinfo->roommate1;
                    echo nl2br("\nRoommate 2 Email: ");
                    echo $contactinfo->roommate2;
                    echo nl2br("\nRoommate 3 Email: ");
                    echo $contactinfo->roommate3;
                    echo nl2br("\nRoommate 4 Email: ");
                    echo $contactinfo->roommate4;
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
                foreach ($reminders as $reminder) {
                    echo nl2br("\nAssignments: ");
                    echo $reminder->assignments;
                    echo nl2br("\nMeetings: ");
                    echo $reminder->meetings;
                    echo nl2br("\nBills: ");
                    echo $reminder->bills;
                }
                echo nl2br("\n\nLandlord Information:\n");
                $landlordInfo = DB::select('select * from landlord');
                foreach ($landlordInfo as $info) {
                    echo nl2br("\nHousing Type: ");
                    echo $info->housingType;
                    echo nl2br("\nRental Company: ");
                    echo $info->rentalCompany;
                    echo nl2br("\nHousing Type: ");
                    echo $info->housingType;
                    echo nl2br("\nHousing Type: ");
                    echo $info->housingType;
                    echo nl2br("\nOffice Hours: ");
                    echo $info->officeHours;
                    echo nl2br("\nPhone Number: ");
                    echo $info->phone;
                    echo nl2br("\nEmail Addresss: ");
                    echo $info->email;
                    echo nl2br("\nOffice Address: ");
                    echo $info->officeAddress;
                    echo nl2br("\nRent Due By Date: ");
                    echo $info->rentDueBy;
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