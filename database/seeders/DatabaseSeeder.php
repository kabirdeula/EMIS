<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Courses;
use App\Models\Programs;
use App\Models\Semester;
use App\Models\Teachers;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [

            [
                'name' => 'Aakash Poudel',
                'email' => 'aakashpoudel@gmail.com',
                'type' => 0,
                'password' => bcrypt('aakash123'),
            ],


            [
                'name' => 'Kabir Deula',
                'email' => 'kabirdeula167@gmail.com',
                'type' => 0,
                'password' => bcrypt('20600505'),
            ],

            [
                'name' => 'Sanisha Maharjan',
                'email' => 'msanisha01@gmail.com',
                'type' => 0,
                'password' => bcrypt('chandan123'),
            ],

            [
                'name' => 'Student',
                'email' => 'student@example.com',
                'type' => 0,
                'password' => bcrypt('student123'),
            ],

            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'type' => 1,
                'password' => bcrypt('admin123'),
            ],

            [
                'name' => 'Chhetra Bahadur Chhetri',
                'email' => 'chhetrachhetri@gmail.com',
                'type' => 2,
                'password' => bcrypt('chetri123'),
            ],

            [
                'name' => 'Sumit Ghising',
                'email' => 'sumitghising@gmail.com',
                'type' => 2,
                'password' => bcrypt('sumit123'),
            ],

            [
                'name' => 'Teacher',
                'email' => 'teacher@example.com',
                'type' => 2,
                'password' => bcrypt('teacher123'),
            ],

            [
                'name' => 'Hari Lama',
                'email' => 'harilama@gmail.com',
                'type' => 3,
                'password' => bcrypt('harilama'),
            ],

            [
                'name' => 'Parent',
                'email' => 'parent@example.com',
                'type' => 3,
                'password' => bcrypt('parent123'),
            ],

        ];

//             ('Aayush'    , 'Raj'     , 'Manandhar'   , 'Male'  , 'Kalimati'      , 'Kalimati'      , '9885148031', 'aayushmanandhar@gmail.com'    , 'Hari Manandhar'      , 'Shopkeeper'    , '9880836031', 'Gita Manandhar'     , 'Nurse'         , '9818261031', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Aayush'    , ''        , 'Shakya'      , 'Male'  , 'New Road'      , 'New Road'      , '9885148032', 'aayushshakya@gmail.com'       , 'Rajan Shakya'        , 'Teacher'       , '9880836032', 'Ganga Shakya'       , 'Shopkeeper'    , '9818261032', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'First'),
//             ('Aayushma'  , ''        , 'Adhikari'    , 'Female', 'Lolang'        , 'Lolang'        , '9885148098', 'aayushmaadhikari@gmail.com'   , 'Ram Adhikari'        , 'Teacher'       , '9880836098', 'Sanumaya Adhikari'  , 'Housewife'     , '9818261098', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Ajay'      , ''        , 'Adhikari'    , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148033', 'ajayadhikari@gmail.com'       , 'Prazwal Adhikari'    , 'Investor'      , '9880836033', 'Jamuna Adhikari'    , 'Beautician'    , '9818261033', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'First'),
//             ('Ameena'    , ''        , 'Gurung'      , 'Female', 'Lolang'        , 'Lolang'        , '9885148034', 'ameenagurung@gmail.com'       , 'Ramesh Gurung'       , 'Shopkeeper'    , '9880836034', 'Sunita Gurung'      , 'Chef'          , '9818261034', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Anjali'    , ''        , 'Tandukar'    , 'Female', 'Balaju'        , 'Balaju'        , '9885148035', 'anjalitandukar@gmail.com'     , 'Ram Tandukar'        , 'Teacher'       , '9880836035', 'Sangita Tandukar'   , 'Housewife'     , '9818261035', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Anjila'    , ''        , 'Sthapit'     , 'Female', 'Bhedasingh'    , 'Bhedasingh'    , '9885148036', 'anjilasthapit@gmail.com'      , 'Shyam Sthapit'       , 'Investor'      , '9880836036', 'Mira Sthapit'       , 'Receptionist'  , '9818261036', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Ankush'    , ''        , 'Sharma'      , 'Male'  , 'Dhalko'        , 'Dhalko'        , '9885148037', 'ankushsharma@gmail.com'       , 'Ganesh Sharma'       , 'Shopkeeper'    , '9880836037', 'Renu Sharma'        , 'Teacher'       , '9818261037', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Anup'      , ''        , 'Pathak'      , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148038', 'anuppathak@gmail.com'         , 'Shiv Pathak'         , 'Teacher'       , '9880836038', 'Rina Pathak'        , 'Nurse'         , '9818261038', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BHM'     , 'Fourth'),
//             ('Anuska'    , ''        , 'Shahi'       , 'Female', 'Tamsipakha'    , 'Tamsipakha'    , '9885148039', 'anuskashahi@gmail.com'        , 'Krishna Shahi'       , 'Investor'      , '9880836039', 'Sanumaya Shahi'     , 'Shopkeeper'    , '9818261039', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Arjun'     , 'Thapa'   , 'Magar'       , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148040', 'arjunmagar@gmail.com'         , 'Hari Magar'          , 'Shopkeeper'    , '9880836040', 'Anjana Magar'       , 'Beautician'    , '9818261040', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Arshi'     , ''        , 'Baniya'      , 'Female', 'Indrachowk'    , 'Indrachowk'    , '9885148110', 'arshibaniya@gmail.com'        , 'Ram Baniya'          , 'Investor'      , '9880836110', 'Ganga Baniya'       , 'Beautician'    , '9818261110', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Ashma'     , 'Thapa'   , 'Magar'       , 'Female', 'Bhedasingh'    , 'Bhedasingh'    , '9885148041', 'ashmamagar@gmail.com'         , 'Rajan Magar'         , 'Teacher'       , '9880836041', 'Sita Magar'         , 'Chef'          , '9818261041', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Ayush'     , ''        , 'Manandhar'   , 'Male'  , 'Ason'          , 'Ason'          , '9885148000', 'ayushmanandhar@gmail.com'     , 'Ram Manandhar'       , 'Teacher'       , '9880836000', 'Sita Manandhar'     , 'Housewife'     , '9818261000', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Ayushma'   , ''        , 'Shrestha'    , 'Female', 'Balaju'        , 'Balaju'        , '9885148103', 'ayushmashrestha@gmail.com'    , 'Hari Shrestha'       , 'Shopkeeper'    , '9880836103', 'Jamuna Shrestha'    , 'Beautician'    , '9818261103', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Bhuwan'    , ''        , 'Singh'       , 'Male'  , 'Pepsicola'     , 'Pepsicola'     , '9885148001', 'bhuwansingh@gmail.com'        , 'Shyam Singh'         , 'Investor'      , '9880836001', 'Gita Singh'         , 'Receptionist'  , '9818261001', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Bibek'     , ''        , 'Karki'       , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148002', 'bibekkarki@gmail.com'         , 'Ganesh Karki'        , 'Teacher'       , '9880836002', 'Ganga Karki'        , 'Teacher'       , '9818261002', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Bibek'     , ''        , 'Pandit'      , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148003', 'bibekpandit@gmail.com'        , 'Shiv Pandit'         , 'Investor'      , '9880836003', 'Jamuna Pandit'      , 'Nurse'         , '9818261003', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Bijina'    , ''        , 'Maharjan'    , 'Female', 'Thankot'       , 'Thankot'       , '9885148004', 'bijinamaharjan@gmail.com'     , 'Krishna Maharjan'    , 'Shopkeeper'    , '9880836004', 'Sunita Maharjan'    , 'Shopkeeper'    , '9818261004', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Binit'     , ''        , 'Bohara'      , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148042', 'binitbohara@gmail.com'        , 'Prazwal Bohara'      , 'Investor'      , '9880836042', 'Gita Bohara'        , 'Housewife'     , '9818261042', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BHM'     , 'Fourth'),
//             ('Binod'     , 'Mani'    , 'Tiwari'      , 'Male'  , 'Bhedasingh'    , 'Bhedasingh'    , '9885148043', 'binodtiwari@gmail.com'        , 'Ramesh Tiwari'       , 'Shopkeeper'    , '9880836043', 'Ganga Tiwari'       , 'Receptionist'  , '9818261043', ''          , ''                , ''            , ''        , ''              , ''          , 'Science'   , 'Bachelor', 'Bsc.CSIT', 'First'),
//             ('Chadani'   , ''        , 'Manandhar'   , 'Female', 'Patan'         , 'Patan'         , '9885148104', 'chadanimanandhar@gmail.com'   , 'Rajan Manandhar'     , 'Teacher'       , '9880836104', 'Sunita Manandhar'   , 'Chef'          , '9818261104', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Chandan'   , ''        , 'Shakya'      , 'Male'  , 'Swoyambhu'     , 'Swoyambhu'     , '9885148005', 'chandanshakya@gmail.com'      , 'Hari Shakya'         , 'Teacher'       , '9880836005', 'Sangita Shakya'     , 'Beautician'    , '9818261005', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Chiran'    , ''        , 'Rai'         , 'Male'  , 'Dallu'         , 'Dallu'         , '9885148006', 'chiranrai@gmail.com'          , 'Rajan Rai'           , 'Investor'      , '9880836006', 'Mira Rai'           , 'Chef'          , '9818261006', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Deepali'   , ''        , 'Adhikari'    , 'Female', 'Lolang'        , 'Lolang'        , '9885148044', 'deepaliadhikari@gmail.com'    , 'Ram Adhikari'        , 'Teacher'       , '9880836044', 'Jamuna Adhikari'    , 'Teacher'       , '9818261044', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Deeya'     , ''        , 'Pandey'      , 'Female', 'Bhurungkhel'   , 'Bhurungkhel'   , '9885148105', 'deeyapandey@gmail.com'        , 'Prazwal Pandey'      , 'Investor'      , '9880836105', 'Sangita Pandey'     , 'Housewife'     , '9818261105', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Sixth'),
//             ('Depen'     , ''        , 'Tuladhar'    , 'Male'  , 'Kalimati'      , 'Kalimati'      , '9885148045', 'depentuladhar@gmail.com'      , 'Shyam Tuladhar'      , 'Investor'      , '9880836045', 'Sunita Tuladhar'    , 'Nurse'         , '9818261045', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Devika'    , ''        , 'Ruwali'      , 'Female', 'Lolang'        , 'Lolang'        , '9885148101', 'devikaruwali@gmail.com'       , 'Shiv Ruwali'         , 'Teacher'       , '9880836101', 'Gita Ruwali'        , 'Nurse'         , '9818261101', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Sixth'),
//             ('Gagan'     , ''        , 'Acharya'     , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148046', 'gaganacharya@gmail.com'       , 'Ganesh Acharya'      , 'Shopkeeper'    , '9880836046', 'Sangita Acharya'    , 'Shopkeeper'    , '9818261046', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Garima'    , ''        , 'Maharjan'    , 'Female', 'Balaju'        , 'Balaju'        , '9885148047', 'garimamaharjan@gmail.com'     , 'Shiv Maharjan'       , 'Teacher'       , '9880836047', 'Mira Maharjan'      , 'Beautician'    , '9818261047', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Second'),
//             ('Grishma'   , ''        , 'Timalsina'   , 'Female', 'Dhalko'        , 'Dhalko'        , '9885148048', 'grishmatimalsina@gmail.com'   , 'Krishna Timalsina'   , 'Investor'      , '9880836048', 'Renu Timalsina'     , 'Chef'          , '9818261048', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Harati'    , ''        , 'Bajracharya' , 'Female', 'Balaju'        , 'Balaju'        , '9885148097', 'haratibajracharya@gmail.com'  , 'Ramesh Bajracharya'  , 'Shopkeeper'    , '9880836097', 'Rina Bajracharya'   , 'Chef'          , '9818261097', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Isha'      , 'Rana'    , 'Magar'       , 'Female', 'Lolang'        , 'Lolang'        , '9885148049', 'ishamagar@gmail.com'          , 'Hari Magar'          , 'Shopkeeper'    , '9880836049', 'Sita Magar'         , 'Housewife'     , '9818261049', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Jamir'     , ''        , 'Maharjan'    , 'Male'  , 'Bhurungkhel'   , 'Bhurungkhel'   , '9885148050', 'jamirmaharjan@gmail.com'      , 'Rajan Maharjan'      , 'Teacher'       , '9880836050', 'Sita Maharjan'      , 'Receptionist'  , '9818261050', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Kabir'     , ''        , 'Deula'       , 'Male'  , 'Dhalko'        , 'Dhalko'        , '9885148007', 'kabirdeula@gmail.com'         , 'Prazwal Deula'       , 'Shopkeeper'    , '9880836007', 'Renu Deula'         , 'Housewife'     , '9818261007', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Kabita'    , ''        , 'Phuyal'      , 'Female', 'Golddhunga'    , 'Golddhunga'    , '9885148008', 'kabitaphuyal@gmail.com'       , 'Ramesh Phuyal'       , 'Teacher'       , '9880836008', 'Rina Phuyal'        , 'Receptionist'  , '9818261008', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Kanchan'   , ''        , 'Karki'       , 'Female', 'Swoyambhu'     , 'Swoyambhu'     , '9885148102', 'kanchankarki@gmail.com'       , 'Krishna Karki'       , 'Investor'      , '9880836102', 'Ganga Karki'        , 'Shopkeeper'    , '9818261102', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Kasak'     , ''        , 'Shrestha'    , 'Female', 'Chaumati'      , 'Chaumati'      , '9885148107', 'kasakshrestha@gmail.com'      , 'Rajan Shrestha'      , 'Teacher'       , '9880836107', 'Renu Shrestha'      , 'Teacher'       , '9818261107', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Kavir'     , 'Man'     , 'Singh'       , 'Male'  , 'Khusibu'       , 'Khusibu'       , '9885148051', 'kavirsingh@gmail.com'         , 'Prazwal Singh'       , 'Investor'      , '9880836051', 'Gita Singh'         , 'Teacher'       , '9818261051', ''          , ''                , ''            , ''        , ''              , ''          , 'Science'   , 'Bachelor', 'Bsc.CSIT', 'Fourth'),
//             ('Kiran'     , ''        , 'Manandhar'   , 'Male'  , 'Basantapur'    , 'Basantapur'    , '9885148009', 'kiranmanandhar@gmail.com'     , 'Ram Manandhar'       , 'Investor'      , '9880836009', 'Sanumaya Manandhar' , 'Teacher'       , '9818261009', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Lasata'    , ''        , 'Shakya'      , 'Female', 'Yetkha'        , 'Yetkha'        , '9885148052', 'lasatashakya@gmail.com'       , 'Ramesh Shakya'       , 'Shopkeeper'    , '9880836052', 'Ganga Shakya'       , 'Nurse'         , '9818261052', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Lasta'     , ''        , 'Maharjan'    , 'Female', 'Bijeshwori'    , 'Bijeshwori'    , '9885148111', 'lastamaharjan@gmail.com'      , 'Shyam Maharjan'      , 'Shopkeeper'    , '9880836111', 'Jamuna Maharjan'    , 'Chef'          , '9818261111', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Lumanti'   , ''        , 'Manandhar'   , 'Female', 'Balaju'        , 'Balaju'        , '9885148053', 'lumantimanandhar@gmail.com'   , 'Ram Manandhar'       , 'Teacher'       , '9880836053', 'Jamuna Manandhar'   , 'Shopkeeper'    , '9818261053', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Manish'    , ''        , 'Pandey'      , 'Male'  , 'Balaju'        , 'Balaju'        , '9885148010', 'manishpandey@gmail.com'       , 'Shyam Pandey'        , 'Shopkeeper'    , '9880836010', 'Anjana Pandey'      , 'Nurse'         , '9818261010', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Manita'    , ''        , 'Pujari'      , 'Female', 'Dhalko'        , 'Dhalko'        , '9885148109', 'manitapujari@gmail.com'       , 'Ramesh Pujari'       , 'Shopkeeper'    , '9880836109', 'Gita Pujari'        , 'Shopkeeper'    , '9818261109', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Megha'     , ''        , 'Darshandhari', 'Female', 'Chetrapati'    , 'Chetrapati'    , '9885148108', 'meghadarshandhari@gmail.com'  , 'Prazwal Darshandhari', 'Investor'      , '9880836108', 'Sita Darshandhari'  , 'Nurse'         , '9818261108', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Muskan'    , ''        , 'Shilakar'    , 'Female', 'Tamsipakha'    , 'Tamsipakha'    , '9885148054', 'muskanshilakar@gmail.com'     , 'Shyam Shilakar'      , 'Investor'      , '9880836054', 'Sunita Shilakar'    , 'Beautician'    , '9818261054', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Nandita'   , ''        , 'Rauniyar'    , 'Female', 'New Road'      , 'New Road'      , '9885148055', 'nanditarauniyar@gmail.com'    , 'Ganesh Rauniyar'     , 'Shopkeeper'    , '9880836055', 'Sangita Rauniyar'   , 'Chef'          , '9818261055', ''          , ''                , ''            , ''        , ''              , ''          , 'Science'   , 'Bachelor', 'Bsc.CSIT', 'Fourth'),
//             ('Neha'      , ''        , 'Gurung'      , 'Female', 'Dallu'         , 'Dallu'         , '9885148056', 'nehagurung@gmail.com'         , 'Shiv Gurung'         , 'Teacher'       , '9880836056', 'Mira Gurung'        , 'Housewife'     , '9818261056', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Nikita'    , ''        , 'Shahi'       , 'Female', 'New Road'      , 'New Road'      , '9885148057', 'nikitashahi@gmail.com'        , 'Krishna Shahi'       , 'Investor'      , '9880836057', 'Renu Shahi'         , 'Receptionist'  , '9818261057', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Nischal'   , 'Raj'     , 'Basnet'      , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148011', 'nischalbasnet@gmail.com'      , 'Ganesh Basnet'       , 'Teacher'       , '9880836011', 'Sita Basnet'        , 'Shopkeeper'    , '9818261011', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Prabin'    , 'Thapa'   , 'Magar'       , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148012', 'prabinmagar@gmail.com'        , 'Shiv Magar'          , 'Investor'      , '9880836012', 'Gita Magar'         , 'Beautician'    , '9818261012', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Prachi'    , ''        , 'Shahi'       , 'Female', 'Nardevi'       , 'Nardevi'       , '9885148058', 'prachishahi@gmail.com'        , 'Hari Shahi'          , 'Shopkeeper'    , '9880836058', 'Rina Shahi'         , 'Teacher'       , '9818261058', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Pramod'    , ''        , 'Dangol'      , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148059', 'pramoddangol@gmail.com'       , 'Rajan Dangol'        , 'Teacher'       , '9880836059', 'Sanumaya Dangol'    , 'Nurse'         , '9818261059', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Prateekxya', ''        , 'Dangol'      , 'Female', 'Dragon Heart'  , 'Dragon Heart'  , '9885148092', 'prateekxyadangol@gmail.com'   , 'Shiv Dangol'         , 'Teacher'       , '9880836092', 'Jamuna Dangol'      , 'Receptionist'  , '9818261092', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Prazita'   , ''        , 'KC'          , 'Female', 'Balaju'        , 'Balaju'        , '9885148099', 'prazitakc@gmail.com'          , 'Shyam KC'            , 'Investor'      , '9880836099', 'Anjana KC'          , 'Receptionist'  , '9818261099', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Promise'   , ''        , 'Lohani'      , 'Male'  , 'Paknajol'      , 'Paknajol'      , '9885148060', 'promiselohani@gmail.com'      , 'Prazwal Lohani'      , 'Investor'      , '9880836060', 'Anjana Lohani'      , 'Shopkeeper'    , '9818261060', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Pujan'     , ''        , 'Tamang'      , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148061', 'pujantamang@gmail.com'        , 'Ramesh Tamang'       , 'Shopkeeper'    , '9880836061', 'Sita Tamang'        , 'Beautician'    , '9818261061', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BHM'     , 'First'),
//             ('Rabin'     , ''        , 'Dangol'      , 'Male'  , 'Tokha'         , 'Tokha'         , '9885148013', 'rabindangol@gmail.com'        , 'Krishna Dangol'      , 'Shopkeeper'    , '9880836013', 'Ganga Dangol'       , 'Chef'          , '9818261013', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Rabin'     , ''        , 'Sunar'       , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148062', 'rabinsunar@gmail.com'         , 'Ram Sunar'           , 'Teacher'       , '9880836062', 'Gita Sunar'         , 'Chef'          , '9818261062', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Rahul'     , 'Thapa'   , 'Magar'       , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148063', 'rahulmagar@gmail.com'         , 'Shyam Magar'         , 'Investor'      , '9880836063', 'Ganga Magar'        , 'Housewife'     , '9818261063', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Rakesh'    , ''        , 'Shrestha'    , 'Male'  , 'Tokha'         , 'Tokha'         , '9885148014', 'rakeshshrestha@gmail.com'     , 'Hari Shrestha'       , 'Teacher'       , '9880836014', 'Jamuna Shrestha'    , 'Housewife'     , '9818261014', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Rijan'     , ''        , 'Lamichhane'  , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148015', 'rijanlamichhane@gmail.com'    , 'Rajan Lamichhane'    , 'Investor'      , '9880836015', 'Sunita Lamichhane'  , 'Receptionist'  , '9818261015', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Rijan'     , ''        , 'Rajopadhaya' , 'Male'  , 'Tamsipakha'    , 'Tamsipakha'    , '9885148016', 'rijanrajopadhaya@gmail.com'   , 'Prazwal Rajopadhaya' , 'Shopkeeper'    , '9880836016', 'Sangita Rajopadhaya', 'Teacher'       , '9818261016', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Rojina'    , ''        , 'Ruwali'      , 'Female', 'Lolang'        , 'Lolang'        , '9885148093', 'rojinaruwali@gmail.com'       , 'Krishna Ruwali'      , 'Investor'      , '9880836093', 'Sunita Ruwali'      , 'Teacher'       , '9818261093', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Roman'     , ''        , 'Maharjan'    , 'Male'  , 'Dallu'         , 'Dallu'         , '9885148064', 'romanmaharjan@gmail.com'      , 'Ganesh Maharjan'     , 'Shopkeeper'    , '9880836064', 'Jamuna Maharjan'    , 'Receptionist'  , '9818261064', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Romit'     , ''        , 'Manandhar'   , 'Male'  , 'Kumaripati'    , 'Kumaripati'    , '9885148017', 'romitmanandhar@gmail.com'     , 'Ram Manandhar'       , 'Teacher'       , '9880836017', 'Mira Manandhar'     , 'Nurse'         , '9818261017', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Roshan'    , 'Thapa'   , 'Magar'       , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148065', 'roshanmagar@gmail.com'        , 'Shiv Magar'          , 'Teacher'       , '9880836065', 'Sunita Magar'       , 'Teacher'       , '9818261065', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BHM'     , 'Fourth'),
//             ('Rushma'    , ''        , 'Bajracharya' , 'Female', 'Balaju'        , 'Balaju'        , '9885148096', 'rushmabajracharya@gmail.com'  , 'Prazwal Bajracharya' , 'Investor'      , '9880836096', 'Renu Bajracharya'   , 'Beautician'    , '9818261096', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Sachin'    , ''        , 'Sherchan'    , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148066', 'sachinsherchan@gmail.com'     , 'Krishna Sherchan'    , 'Investor'      , '9880836066', 'Sangita Sherchan'   , 'Nurse'         , '9818261066', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Sagun'     , ''        , 'Ghimire'     , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148018', 'sagunghimire@gmail.com'       , 'Shyam Ghimire'       , 'Investor'      , '9880836018', 'Renu Ghimire'       , 'Shopkeeper'    , '9818261018', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Sahil'     , ''        , 'Prajapati'   , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148019', 'sahilprajapati@gmail.com'     , 'Ganesh Prajapati'    , 'Shopkeeper'    , '9880836019', 'Rina Prajapati'     , 'Beautician'    , '9818261019', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Sakshi'    , ''        , 'Gupta'       , 'Female', 'Bhurungkhel'   , 'Bhurungkhel'   , '9885148067', 'sakshigupta@gmail.com'        , 'Hari Gupta'          , 'Shopkeeper'    , '9880836067', 'Mira Gupta'         , 'Shopkeeper'    , '9818261067', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Saloni'    , ''        , 'Shrestha'    , 'Female', 'Balaju'        , 'Balaju'        , '9885148068', 'salonishrestha@gmail.com'     , 'Rajan Shrestha'      , 'Teacher'       , '9880836068', 'Renu Shrestha'      , 'Beautician'    , '9818261068', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Sameer'    , ''        , 'Ali'         , 'Male'  , 'Dallu'         , 'Dallu'         , '9885148020', 'sameerali@gmail.com'          , 'Shiv Ali'            , 'Teacher'       , '9880836020', 'Sanumaya Ali'       , 'Chef'          , '9818261020', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Samik'     , ''        , 'Shakya'      , 'Male'  , 'Swoyambhu'     , 'Swoyambhu'     , '9885148069', 'samikshakya@gmail.com'        , 'Prazwal Shakya'      , 'Investor'      , '9880836069', 'Sita Shakya'        , 'Chef'          , '9818261069', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Samir'     , ''        , 'Dotel'       , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148021', 'samirdotel@gmail.com'         , 'Krishna Dotel'       , 'Investor'      , '9880836021', 'Anjana Dotel'       , 'Housewife'     , '9818261021', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Samjhana'  , ''        , 'Magar'       , 'Female', 'Tamsipakha'    , 'Tamsipakha'    , '9885148070', 'samjhanamagar@gmail.com'      , 'Ramesh Magar'        , 'Shopkeeper'    , '9880836070', 'Gita Magar'         , 'Housewife'     , '9818261070', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Samman'    , 'Narsingh', 'Suwal'       , 'Male'  , 'Tamsipakha'    , 'Tamsipakha'    , '9885148071', 'sammansuwal@gmail.com'        , 'Ram Suwal'           , 'Teacher'       , '9880836071', 'Ganga Suwal'        , 'Receptionist'  , '9818261071', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Sanisha'   , ''        , 'Maharjan'    , 'Female', 'Nardevi'       , 'Nardevi'       , '9885148022', 'msani01@gmail.com'            , 'Hari Maharjan'       , 'Shopkeeper'    , '9880836022', 'Sita Maharjan'      , 'Receptionist'  , '9818261022', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Sanisha'   , ''        , 'Maharjan'    , 'Female', 'Thamel'        , 'Thamel'        , '9885148072', 'sanishamaharjan@gmail.com'    , 'Shyam Maharjan'      , 'Investor'      , '9880836072', 'Jamuna Maharjan'    , 'Teacher'       , '9818261072', ''          , ''                , ''            , ''        , ''              , ''          , 'Science'   , 'Bachelor', 'Bsc.CSIT', 'Fourth'),
//             ('Sanju'     , ''        , 'Mishra'      , 'Female', 'Balaju'        , 'Balaju'        , '9885148094', 'sanjumishra@gmail.com'        , 'Hari Mishra'         , 'Shopkeeper'    , '9880836094', 'Sangita Mishra'     , 'Nurse'         , '9818261094', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Santosh'   , ''        , 'Gurung'      , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148073', 'santoshgurung@gmail.com'      , 'Ganesh Gurung'       , 'Shopkeeper'    , '9880836073', 'Sunita Gurung'      , 'Nurse'         , '9818261073', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Seenzo'    , ''        , 'Shrestha'    , 'Female', 'Dhulikhel'     , 'Dhulikhel'     , '9885148100', 'seenzoshrestha@gmail.com'     , 'Ganesh Shrestha'     , 'Shopkeeper'    , '9880836100', 'Sita Shrestha'      , 'Teacher'       , '9818261100', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Sixth'),
//             ('Shaswot'   , ''        , 'Subedi'      , 'Male'  , 'Bijeshwori'    , 'Bijeshwori'    , '9885148023', 'shaswotsubedi@gmail.com'      , 'Rajan Subedi'        , 'Teacher'       , '9880836023', 'Gita Subedi'        , 'Teacher'       , '9818261023', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Shaugat'   , ''        , 'Sapkota'     , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148074', 'shaugatsapkota@gmail.com'     , 'Shiv Sapkota'        , 'Teacher'       , '9880836074', 'Sangita Sapkota'    , 'Shopkeeper'    , '9818261074', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Sher'      , 'Bahadur' , 'Khadka'      , 'Male'  , 'Tokha'         , 'Tokha'         , '9885148024', 'sherkhadka@gmail.com'         , 'Prazwal Khadka'      , 'Investor'      , '9880836024', 'Ganga Khadka'       , 'Nurse'         , '9818261024', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Shila'     , ''        , 'Prajapati'   , 'Female', 'Dragon Heart'  , 'Dragon Heart'  , '9885148075', 'shilaprajapati@gmail.com'     , 'Krishna Prajapati'   , 'Investor'      , '9880836075', 'Mira Prajapati'     , 'Beautician'    , '9818261075', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Shirapa'   , ''        , 'Ranjit'      , 'Female', 'Balaju'        , 'Balaju'        , '9885148076', 'shiraparanjit@gmail.com'      , 'Hari Ranjit'         , 'Shopkeeper'    , '9880836076', 'Renu Ranjit'        , 'Chef'          , '9818261076', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Second'),
//             ('Shirbha'   , ''        , 'Manandhar'   , 'Female', 'Balaju'        , 'Balaju'        , '9885148077', 'shirbhamanandhar@gmail.com'   , 'Rajan Manandhar'     , 'Teacher'       , '9880836077', 'Rina Manandhar'     , 'Housewife'     , '9818261077', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
//             ('Shirish'   , ''        , 'Manandhar'   , 'Male'  , 'Basantapur'    , 'Basantapur'    , '9885148078', 'shirishmanandhar@gmail.com'   , 'Prazwal Manandhar'   , 'Investor'      , '9880836078', 'Sanumaya Manandhar' , 'Receptionist'  , '9818261078', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
//             ('Shreesty'  , ''        , 'Bajracharya' , 'Female', 'Nardevi'       , 'Nardevi'       , '9885148079', 'shreestybajracharya@gmail.com', 'Ramesh Bajracharya'  , 'Shopkeeper'    , '9880836079', 'Anjana Bajracharya' , 'Teacher'       , '9818261079', ''          , ''                , ''            , ''        , ''              , ''          , 'Science'   , 'Bachelor', 'Bsc.CSIT', 'Fourth'),
//             ('Shubham'   , ''        , 'Chhetri'     , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148080', 'shubhamchhetri@gmail.com'     , 'Ram Chhetri'         , 'Teacher'       , '9880836080', 'Sita Chhetri'       , 'Nurse'         , '9818261080', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
//             ('Shuvechha' , ''        , 'Shrestha'    , 'Female', 'Dhulikhel'     , 'Dhulikhel'     , '9885148025', 'shuvechhashrestha@gmail.com'  , 'Ramesh Shrestha'     , 'Shopkeeper'    , '9880836025', 'Jamuna Shrestha'    , 'Shopkeeper'    , '9818261025', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
//             ('Simon'     , ''        , 'Shrestha'    , 'Male'  , 'Tokha'         , 'Tokha'         , '9885148026', 'simonshrestha@gmail.com'      , 'Ram Shrestha'        , 'Teacher'       , '9880836026', 'Sunita Shrestha'    , 'Beautician'    , '9818261026', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
// ('Simran'    , ''        , 'Ghimire'     , 'Female', 'Lolang'        , 'Lolang'        , '9885148027', 'simranghimire@gmail.com'      , 'Shyam Ghimire'       , 'Investor'      , '9880836027', 'Sangita Ghimire'    , 'Chef'          , '9818261027', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
// ('Simrita'   , ''        , 'Thapa'       , 'Female', 'Lolang'        , 'Lolang'        , '9885148028', 'simritathapa@gmail.com'       , 'Ganesh Thapa'        , 'Shopkeeper'    , '9880836028', 'Mira Thapa'         , 'Housewife'     , '9818261028', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
// ('Sisam'     , 'Masbe'   , 'Kumal'       , 'Female', 'Lolang'        , 'Lolang'        , '9885148081', 'sisamkumal@gmail.com'         , 'Shyam Kumal'         , 'Investor'      , '9880836081', 'Gita Kumal'         , 'Shopkeeper'    , '9818261081', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
// ('Smriti'    , ''        , 'Maharjan'    , 'Female', 'Chaumati'      , 'Chaumati'      , '9885148095', 'smritimaharjan@gmail.com'     , 'Rajan Maharjan'      , 'Teacher'       , '9880836095', 'Mira Maharjan'      , 'Shopkeeper'    , '9818261095', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
// ('Sovia'     , ''        , 'Manandhar'   , 'Female', 'Balaju'        , 'Balaju'        , '9885148082', 'soviamanandhar@gmail.com'     , 'Ganesh Manandhar'    , 'Shopkeeper'    , '9880836082', 'Ganga Manandhar'    , 'Beautician'    , '9818261082', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
// ('Srijana'   , ''        , 'Maharjan'    , 'Female', 'Balaju'        , 'Balaju'        , '9885148083', 'srijanamaharjan@gmail.com'    , 'Shiv Maharjan'       , 'Teacher'       , '9880836083', 'Jamuna Maharjan'    , 'Chef'          , '9818261083', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
// ('Sudarshan' , ''        , 'Dahal'       , 'Male'  , 'Lolang'        , 'Lolang'        , '9885148084', 'sudarshandahal@gmail.com'     , 'Krishna Dahal'       , 'Investor'      , '9880836084', 'Sunita Dahal'       , 'Housewife'     , '9818261084', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
// ('Sudina'    , ''        , 'Shrestha'    , 'Female', 'Banepa'        , 'Banepa'        , '9885148029', 'sudinashrestha@gmail.com'     , 'Shiv Shrestha'       , 'Teacher'       , '9880836029', 'Renu Shrestha'      , 'Receptionist'  , '9818261029', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
// ('Sulash'    , ''        , 'Manandhar'   , 'Male'  , 'Basantapur'    , 'Basantapur'    , '9885148085', 'sulashmanandhar@gmail.com'    , 'Hari Manandhar'      , 'Shopkeeper'    , '9880836085', 'Sangita Manandhar'  , 'Receptionist'  , '9818261085', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BIM'     , 'Fourth'),
// ('Suman'     , ''        , 'Adhikari'    , 'Male'  , 'Khusibu'       , 'Khusibu'       , '9885148086', 'sumanadhikari@gmail.com'      , 'Rajan Adhikari'      , 'Teacher'       , '9880836086', 'Mira Adhikari'      , 'Teacher'       , '9818261086', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
// ('Sumina'    , ''        , 'Kunwar'      , 'Female', 'Lolang'        , 'Lolang'        , '9885148088', 'suminakunwar@gmail.com'       , 'Ramesh Kunwar'       , 'Shopkeeper'    , '9880836088', 'Sita Kunwar'        , 'Shopkeeper'    , '9818261088', ''          , ''                , ''            , ''        , ''              , ''          , 'Humanities', 'Bachelor', 'BCA'     , 'Fourth'),
// ('Sushmita'  , ''        , 'Adhikari'    , 'Female', 'Khusibu'       , 'Khusibu'       , '9885148087', 'sushmitaadhikari@gmail.com'   , 'Prazwal Adhikari'    , 'Investor'      , '9880836087', 'Renu Adhikari'      , 'Nurse'         , '9818261087', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth'),
// ('Sushmita'  , ''        , 'Deula'       , 'Female', 'Teku'          , 'Teku'          , '9885148106', 'sushmitadeula@gmail.com'      , 'Ramesh Deula'        , 'Shopkeeper'    , '9880836106', 'Mira Deula'         , 'Receptionist'  , '9818261106', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
// ('Sweta'     , ''        , 'Rauniyar'    , 'Female', 'Bhedasingh'    , 'Bhedasingh'    , '9885148089', 'swetarauniyar@gmail.com'      , 'Ram Rauniyar'        , 'Teacher'       , '9880836089', 'Sita Rauniyar'      , 'Beautician'    , '9818261089', ''          , ''                , ''            , ''        , ''              , ''          , 'Science'   , 'Bachelor', 'Bsc.CSIT', 'First'),
// ('Urmila'    , ''        , 'Tamang'      , 'Female', 'Lolang'        , 'Lolang'        , '9885148090', 'urmilatamang@gmail.com'       , 'Shyam Tamang'        , 'Investor'      , '9880836090', 'Gita Tamang'        , 'Chef'          , '9818261090', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'First'),
// ('Yangchhen' , 'Lama'    , 'Tamang'      , 'Female', 'Tamsipakha'    , 'Tamsipakha'    , '9885148091', 'yangchhentamang@gmail.com'    , 'Ganesh Tamang'       , 'Shopkeeper'    , '9880836091', 'Ganga Tamang'       , 'Housewife'     , '9818261091', ''          , ''                , ''            , ''        , ''              , ''          , 'Management', 'Bachelor', 'BBM'     , 'Fourth');

        $programs = [
            [
                'name' => 'Bachelor of Business Management',
                'code' => 'BBM'
            ],

            [
                'name' => 'Bachelor of Computer Application',
                'code' => 'BCA'
            ],

            [
                'name' => 'Bachelor of Hotel Management',
                'code' => 'BHM'
            ],

            [
                'name' => 'Bachelor of Information Management',
                'code' => 'BIM'
            ],

            [
                'name' => 'Bachelor of Science in Computer Science & Information Technology',
                'code' => 'BSc.CSIT'
            ],
        ];

        $semesters = [
            [
                'name' => 'First',
                'code' => '1st'
            ],

            [
                'name' => 'Second',
                'code' => '2nd'
            ],

            [
                'name' => 'Third',
                'code' => '3rd'
            ],

            [
                'name' => 'Fourth',
                'code' => '4th'
            ],

            [
                'name' => 'Fifth',
                'code' => '5th'
            ],

            [
                'name' => 'Sixth',
                'code' => '6th'
            ],

            [
                'name' => 'Seventh',
                'code' => '7th'
            ],

            [
                'name' => 'Eight',
                'code' => '8th'
            ],

        ];

        $courses = [
            [
                'name' => 'English Composition',
                'code' => 'ENG 201',
                'credit_hour' => '3',
                'program_id' => 4,
                'semester_id' => 1
            ],

            [
                'name' => 'Mobile Programming',
                'code' => 'CACS 351',
                'credit_hour' => '3',
                'program_id' => 2,
                'semester_id' => 6,
            ],
        ];

        $teachers = [

            [
                'first_name' => 'Chhetra',
                'last_name' => 'Chhetri',
                'user_id' => 6,
                'program_id' => 2,
                'semester_id' => 6,
                'course_id' => 2,
            ],

            [
                'first_name' => 'Sumit',
                'last_name' => 'Ghising',
                'user_id' => 7,
                'program_id' => 2,
                'semester_id' => 6,
                'course_id' => 2,
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }

        foreach($programs as $key => $program){
            Programs::create($program);
        }

        foreach($semesters as $key => $semester){
            Semester::create($semester);
        }

        foreach($courses as $key => $course){
            Courses::create($course);
        }

        foreach($teachers as $key => $teacher){
            Teachers::create($teacher);
        }


    }
}
