<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
                'name' => 'Aayush Raj Manandhar',
                'email' => 'aayushmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayush123'),
            ],

            [
                'name' => 'Aayush Shakya',
                'email' => 'aayushshakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayush123'),
            ],

            [
                'name' => 'Aayushma Adhikari',
                'email' => 'aayushmaadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayushma123'),
            ],

            [
                'name' => 'Ajay Adhikari',
                'email' => 'ajayadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('ajay123'),
            ],

            [
                'name' => 'Ameena Gurung',
                'email' => 'ameenagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('ameena123'),
            ],

            [
                'name' => 'Anjali Tandukar',
                'email' => 'anjalitandukar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjali123'),
            ],

            [
                'name' => 'Anjila Sthapit',
                'email' => 'anjilasthapit@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjila123'),
            ],

            [
                'name' => 'Ankush Sharma',
                'email' => 'ankushsharma@gmail.com',
                'type' => 0,
                'password' => bcrypt('ankush123'),
            ],

            [
                'name' => 'Anup Pathak',
                'email' => 'anuppathak@gmail.com',
                'type' => 0,
                'password' => bcrypt('anup123'),
            ],

            [
                'name' => 'Anuska Shahi',
                'email' => 'anuskashahi@gmail.com',
                'type' => 0,
                'password' => bcrypt('anuska123'),
            ],

            [
                'name' => 'Arjun Thapa Magar',
                'email' => 'arjunthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('arjun123'),
            ],

            [
                'name' => 'Arshi Baniya',
                'email' => 'arshibaniya@gmail.com',
                'type' => 0,
                'password' => bcrypt('arshi123'),
            ],

            [
                'name' => 'Ashma Thapa Magar',
                'email' => 'ashmathapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('ashma123'),
            ],

            [
                'name' => 'Ayush Manandhar',
                'email' => 'ayushmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('ayush123'),
            ],

            [
                'name' => 'Ayushma Shrestha',
                'email' => 'ayushmashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('ayushma123'),
            ],

            [
                'name' => 'Bhuwan Singh',
                'email' => 'bhuwansingh@gmail.com',
                'type' => 0,
                'password' => bcrypt('bhuwan123'),
            ],

            [
                'name' => 'Bibek Karki',
                'email' => 'bibekkarki@gmail.com',
                'type' => 0,
                'password' => bcrypt('bibek123'),
            ],

            [
                'name' => 'Bibek Pandit',
                'email' => 'bibekpandit@gmail.com',
                'type' => 0,
                'password' => bcrypt('bibek123'),
            ],

            [
                'name' => 'Bijina Maharjan',
                'email' => 'bijinamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('bijina123'),
            ],

            [
                'name' => 'Binit Bohara',
                'email' => 'binitbohara@gmail.com',
                'type' => 0,
                'password' => bcrypt('binit123'),
            ],

            [
                'name' => 'Binod Mani Tiwari',
                'email' => 'binodmanitiwari@gmail.com',
                'type' => 0,
                'password' => bcrypt('binod@123'),
            ],

            [
                'name' => 'Chadani Manandhar',
                'email' => 'chadanimanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('chadani@123'),
            ],

            [
                'name' => 'Chandan Shakya',
                'email' => 'chandanshakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('chandan@123'),
            ],

            [
                'name' => 'Chiran Rai',
                'email' => 'chiranrai@gmail.com',
                'type' => 0,
                'password' => bcrypt('chiran@123'),
            ],

            [
                'name' => 'Deepali Adhikari',
                'email' => 'deepaliadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepali@123'),
            ],

            [
                'name' => 'Deeya Pandey',
                'email' => 'deeyapandey@gmail.com',
                'type' => 0,
                'password' => bcrypt('deeya@123'),
            ],

            [
                'name' => 'Depen Tuladhar',
                'email' => 'depentuladhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('depen@123'),
            ],

            [
                'name' => 'Devika Ruwali',
                'email' => 'devikaruwali@gmail.com',
                'type' => 0,
                'password' => bcrypt('devika@123'),
            ],

            [
                'name' => 'Gagan Acharya',
                'email' => 'gaganacharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('gagan@123'),
            ],

            [
                'name' => 'Garima Maharjan',
                'email' => 'garimamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('garima@123'),
            ],

            [
                'name' => 'Grishma Timalsina',
                'email' => 'grishmatimalsina@gmail.com',
                'type' => 0,
                'password' => bcrypt('grishma@123'),
            ],

            [
                'name' => 'Harati Bajracharya',
                'email' => 'haratibajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('harati@123'),
            ],

            [
                'name' => 'Isha Rana Magar',
                'email' => 'isharanamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('isha@123'),
            ],

            [
                'name' => 'Jamir Maharjan',
                'email' => 'jamirmaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('jamir@123'),
            ],

            [
                'name' => 'Kabir Deula',
                'email' => 'kabirdeula167@gmail.com',
                'type' => 0,
                'password' => bcrypt('20600505'),
            ],

            [
                'name' => 'Kabita Phuyal',
                'email' => 'kabitaphuyal@gmail.com',
                'type' => 0,
                'password' => bcrypt('kabita@123'),
            ],

            [
                'name' => 'Kanchan Karki',
                'email' => 'kanchankarki@gmail.com',
                'type' => 0,
                'password' => bcrypt('kanchan@123'),
            ],

            [
                'name' => 'Kasak Shrestha',
                'email' => 'kasakshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('kasak@123'),
            ],

            [
                'name' => 'Kavir Man Singh',
                'email' => 'kavirmansingh@gmail.com',
                'type' => 0,
                'password' => bcrypt('kavir@123'),
            ],

            [
                'name' => 'Kiran Manandhar',
                'email' => 'kiranmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('kiran@123'),
            ],

            [
                'name' => 'Lasata Shakya',
                'email' => 'lasatashakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('lasata@123'),
            ],

            [
                'name' => 'Lumanti Manandhar',
                'email' => 'lumantimanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('lumanti@123'),
            ],

            [
                'name' => 'Manish Pandey',
                'email' => 'manishpandey@gmail.com',
                'type' => 0,
                'password' => bcrypt('manish@123'),
            ],

            [
                'name' => 'Manita Pujari',
                'email' => 'manitapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('manita@123'),
            ],

            [
                'name' => 'Megha Darshandhari',
                'email' => 'meghadarshandhari@gmail.com',
                'type' => 0,
                'password' => bcrypt('megha@123'),
            ],

            [
                'name' => 'Muskan Shilakar',
                'email' => 'muskanshilakar@gmail.com',
                'type' => 0,
                'password' => bcrypt('muskan@123'),
            ],

            [
                'name' => 'Nandita Rauniyar',
                'email' => 'nanditarauniyar@gmail.com',
                'type' => 0,
                'password' => bcrypt('nandita@123'),
            ],

            [
                'name' => 'Neha Gurung',
                'email' => 'nehagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('neha@123'),
            ],

            [
                'name' => 'Nikita Shahi',
                'email' => 'nikitashahi@gmail.com',
                'type' => 0,
                'password' => bcrypt('nikita@123'),
            ],

            [
                'name' => 'Nischal Raj Basnet',
                'email' => 'nischalrajbasnet@gmail.com',
                'type' => 0,
                'password' => bcrypt('nischal@123'),
            ],

            [
                'name' => 'Prabin Thapa Magar',
                'email' => 'prabinthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('prabin@123'),
            ],

            [
                'name' => 'Prachi Shahi',
                'email' => 'prachishahi@gmail.com',
                'type' => 0,
                'password' => bcrypt('prachi@123'),
            ],

            [
                'name' => 'Pramod Dangol',
                'email' => 'pramoddangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('pramod@123'),
            ],

            [
                'name' => 'Pratikshya Dangol',
                'email' => 'pratikshyadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('pratikshya@123'),
            ],

            [
                'name' => 'Prazita KC',
                'email' => 'prazitakc@gmail.com',
                'type' => 0,
                'password' => bcrypt('prazita@123'),
            ],

            [
                'name' => 'Promise Lohani',
                'email' => 'promiselohani@gmail.com',
                'type' => 0,
                'password' => bcrypt('promise@123'),
            ],

            [
                'name' => 'Pujan Tamang',
                'email' => 'pujantamang@gmail.com',
                'type' => 0,
                'password' => bcrypt('pujan@123'),
            ],

            [
                'name' => 'Rabin Dangol',
                'email' => 'rabindangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('rabin@123'),
            ],

            [
                'name' => 'Rabin Sunar',
                'email' => 'rabinsunar@gmail.com',
                'type' => 0,
                'password' => bcrypt('rabin@123'),
            ],

            [
                'name' => 'Rahul Thapa Magar',
                'email' => 'rahulthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('rahul@123'),
            ],

            [
                'name' => 'Rakesh Shrestha',
                'email' => 'rakeshshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('rakesh@123'),
            ],

            [
                'name' => 'Rijan Lamichhane',
                'email' => 'rijanlamichhane@gmail.com',
                'type' => 0,
                'password' => bcrypt('rijan@123'),
            ],

            [
                'name' => 'Rijan Rajopadhaya',
                'email' => 'rijanrajopadhaya@gmail.com',
                'type' => 0,
                'password' => bcrypt('rijan@123'),
            ],

            [
                'name' => 'Rojina Ruwali',
                'email' => 'rojinaruwali@gmail.com',
                'type' => 0,
                'password' => bcrypt('rojina@123'),
            ],

            [
                'name' => 'Roman Maharjan',
                'email' => 'romanmaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('roman@123'),
            ],

            [
                'name' => 'Romit Manandhar',
                'email' => 'romitmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('romit@123'),
            ],

            [
                'name' => 'Roshan Thapa Magar',
                'email' => 'roshanthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('roshan@123'),
            ],

            [
                'name' => 'Rushma Bajracharya',
                'email' => 'rushmabajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('rushma@123'),
            ],

            [
                'name' => 'Sachin Sherchan',
                'email' => 'sachinsherchan@gmail.com',
                'type' => 0,
                'password' => bcrypt('sachin@123'),
            ],

            [
                'name' => 'Sagun Ghimire',
                'email' => 'sagunghimire@gmail.com',
                'type' => 0,
                'password' => bcrypt('sagun@123'),
            ],

            [
                'name' => 'Sahil Prajapati',
                'email' => 'sahilprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('sahil@123'),
            ],

            [
                'name' => 'Sakshi Gupta',
                'email' => 'sakshigupta@gmail.com',
                'type' => 0,
                'password' => bcrypt('sakshi@123'),
            ],

            [
                'name' => 'Saloni Shrestha',
                'email' => 'salonishrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('saloni@123'),
            ],

            [
                'name' => 'Sameer Ali',
                'email' => 'sameerali@gmail.com',
                'type' => 0,
                'password' => bcrypt('sameer@123'),
            ],

            [
                'name' => 'Samik Shakya',
                'email' => 'samikshakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('samik@123'),
            ],

            [
                'name' => 'Samir Dotel',
                'email' => 'samirdotel@gmail.com',
                'type' => 0,
                'password' => bcrypt('samir@123'),
            ],

            [
                'name' => 'Samjhana Magar',
                'email' => 'samjhanamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('samjhana@123'),
            ],

            [
                'name' => 'Samman Narsingh Suwal',
                'email' => 'sammannarsinghsuwal@gmail.com',
                'type' => 0,
                'password' => bcrypt('samman@123'),
            ],

            [
                'name' => 'Sanisha Maharjan',
                'email' => 'msanisha01@gmail.com',
                'type' => 0,
                'password' => bcrypt('chandan123'),
            ],

            [
                'name' => 'Sanisha Maharjan',
                'email' => 'sanishamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanisha@123'),
            ],

            [
                'name' => 'Sanju Mishra',
                'email' => 'sanjumishra@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanju@123'),
            ],

            [
                'name' => 'Santosh Gurung',
                'email' => 'santoshgurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('santosh@123'),
            ],

            [
                'name' => 'Seenzo Shrestha',
                'email' => 'seenzoshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('seenzo@123'),
            ],

            [
                'name' => 'Shaswot Subedi',
                'email' => 'shaswotsubedi@gmail.com',
                'type' => 0,
                'password' => bcrypt('shaswot@123'),
            ],

            [
                'name' => 'Shaugat Sapkota',
                'email' => 'shaugatsapkota@gmail.com',
                'type' => 0,
                'password' => bcrypt('shaugat@123'),
            ],

            [
                'name' => 'Sher Bahadur Khadka',
                'email' => 'sherbahadurkhadka@gmail.com',
                'type' => 0,
                'password' => bcrypt('sher@123'),
            ],

            [
                'name' => 'Shila Prajapati',
                'email' => 'shilaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('shila@123'),
            ],

            [
                'name' => 'Shirapa Ranjit',
                'email' => 'shiraparanjit@gmail.com',
                'type' => 0,
                'password' => bcrypt('shirapa@123'),
            ],

            [
                'name' => 'Shirbha Manandhar',
                'email' => 'shirbhamanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('shirbha@123'),
            ],

            [
                'name' => 'Shirish Manandhar',
                'email' => 'shirishmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('shirish@123'),
            ],

            [
                'name' => 'Shreesty Bajracharya',
                'email' => 'shreestybajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('shreesty@123'),
            ],

            [
                'name' => 'Shubham Chhetri',
                'email' => 'shubhamchhetri@gmail.com',
                'type' => 0,
                'password' => bcrypt('shubham@123'),
            ],

            [
                'name' => 'Shuvechha Shrestha',
                'email' => 'shuvechhashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('shuvechha@123'),
            ],

            [
                'name' => 'Simon Shrestha',
                'email' => 'simonshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('simon@123'),
            ],

            [
                'name' => 'Simran Ghimire',
                'email' => 'simranghimire@gmail.com',
                'type' => 0,
                'password' => bcrypt('simran@123'),
            ],

            [
                'name' => 'Simrita Thapa',
                'email' => 'simritathapa@gmail.com',
                'type' => 0,
                'password' => bcrypt('simrita@123'),
            ],

            [
                'name' => 'Sisan Masbe Kumal',
                'email' => 'sisammasbekumal@gmail.com',
                'type' => 0,
                'password' => bcrypt('sisam@123'),
            ],

            [
                'name' => 'Smriti Maharjan',
                'email' => 'smritimaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('smriti@123'),
            ],

            [
                'name' => 'Sovia Manandhar',
                'email' => 'soviamanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sovia@123'),
            ],

            [
                'name' => 'Srijana Maharjan',
                'email' => 'srijanamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
            ],

            [
                'name' => 'Student',
                'email' => 'student@example.com',
                'type' => 0,
                'password' => bcrypt('student123'),
            ],

            [
                'name' => 'Sudarshan Dahal',
                'email' => 'sudarshandahal@gmail.com',
                'type' => 0,
                'password' => bcrypt('sudarshan@123'),
            ],

            [
                'name' => 'Sudina Shrestha',
                'email' => 'sudinashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('sudina@123'),
            ],

            [
                'name' => 'Sulash Manandhar',
                'email' => 'sulashmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sulash@123'),
            ],

            [
                'name' => 'Suman Adhikari',
                'email' => 'sumanadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('suman@123'),
            ],

            [
                'name' => 'Sumina Kunwar',
                'email' => 'suminakunwar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sumina@123'),
            ],

            [
                'name' => 'Sushmita Adhikari',
                'email' => 'sushmitaadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('sushmita@123'),
            ],

            [
                'name' => 'Sushmita Deula',
                'email' => 'sushmitadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sushmita@123'),
            ],

            [
                'name' => 'Sweta Rauniyar',
                'email' => 'swetarauniyar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sweta@123'),
            ],

            [
                'name' => 'Urmila Tamang',
                'email' => 'urmilatamang@gmail.com',
                'type' => 0,
                'password' => bcrypt('urmila@123'),
            ],

            [
                'name' => 'Yangchhen Lama Tamang',
                'email' => 'yangchhenlamatamang@gmail.com',
                'type' => 0,
                'password' => bcrypt('yangchhen@123'),
            ],

            /**
            ** Admin Users
            */

            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'type' => 1,
                'password' => bcrypt('admin123'),
            ],

            /**
            ** Teachers
            */

            [
                'name' => 'Chhetra Bahadur Chhetri',
                'email' => 'chhetrachhetri@gmail.com',
                'type' => 2,
                'password' => bcrypt('chetri123'),
            ],

            [
                'name' => 'Dinesh Khadka',
                'email' => 'dineshkhadka@gmail.com',
                'type' => 2,
                'password' => bcrypt('dinesh@123'),
            ],

            [
                'name' => 'Khusbu Kumari Sarraf',
                'email' => 'khusbukumarisarraf@gmail.com',
                'type' => 2,
                'password' => bcrypt('khusbu@123'),
            ],

            [
                'name' => 'Laxmi Adhikari',
                'email' => 'laxmiadhikari@gmail.com',
                'type' => 2,
                'password' => bcrypt('laxmi@123'),
            ],

            [
                'name' => 'Mausam Shah',
                'email' => 'mausamshah@gmail.com',
                'type' => 2,
                'password' => bcrypt('mausam@123'),
            ],

            [
                'name' => 'Nabaraj Bahadur Negi',
                'email' => 'nabarajbahadurnegi@gmail.com',
                'type' => 2,
                'password' => bcrypt('nabaraj@123'),
            ],

            [
                'name' => 'Pramod Khadka',
                'email' => 'pramodkhadka@gmail.com',
                'type' => 2,
                'password' => bcrypt('pramod@123'),
            ],

            [
                'name' => 'Ram Pokhrel',
                'email' => 'rampokhrel@gmail.com',
                'type' => 2,
                'password' => bcrypt('ram@123'),
            ],

            [
                'name' => 'Sachhita Maharjan',
                'email' => 'sachhitamaharjan@gmail.com',
                'type' => 2,
                'password' => bcrypt('sachita@123'),
            ],

            [
                'name' => 'Santosh Bhusal',
                'email' => 'santoshbhusal@gmail.com',
                'type' => 2,
                'password' => bcrypt('santosh@123'),
            ],

            [
                'name' => 'Saroj Thapa',
                'email' => 'sarojthapa@gmail.com',
                'type' => 2,
                'password' => bcrypt('saroj@123'),
            ],

            [
                'name' => 'Sujesh Manandhar',
                'email' => 'sujeshmanandhar@gmail.com',
                'type' => 2,
                'password' => bcrypt('sujesh@123'),
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
                'name' => 'Yubaraj Devkota',
                'email' => 'yubrajdevkota@gmail.com',
                'type' => 2,
                'password' => bcrypt('yubraj@123'),
            ],

            /**
             ** Parent
             */

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

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
