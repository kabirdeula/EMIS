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
                'name' => 'Aaisha Deula',
                'email' => 'aaishadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('aaisha@123'),
            ],

            [
                'name' => 'Aakash Poudel',
                'email' => 'aakashpoudel@gmail.com',
                'type' => 0,
                'password' => bcrypt('aakash@123'),
            ],

            [
                'name' => 'Aastha Budhathoki',
                'email' => 'aayushmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayush@123'),
            ],

            [
                'name' => 'Aayush Raj Manandhar',
                'email' => 'aayushmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayush@123'),
            ],

            [
                'name' => 'Aayush Shakya',
                'email' => 'aayushshakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayush@123'),
            ],

            [
                'name' => 'Aayusha Karki',
                'email' => 'aayushakarki@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayusha@123'),
            ],

            [
                'name' => 'Aayusha Maharjan',
                'email' => 'aayushamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayusha@123'),
            ],

            [
                'name' => 'Aayushma Adhikari',
                'email' => 'aayushmaadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayushma@123'),
            ],

            [
                'name' => 'Ajay Adhikari',
                'email' => 'ajayadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('ajay@123'),
            ],

            [
                'name' => 'Aleena Deula',
                'email' => 'aleenadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('aleena@123'),
            ],

            [
                'name' => 'Alina Ghale',
                'email' => 'alinaghale@gmail.com',
                'type' => 0,
                'password' => bcrypt('alina@123'),
            ],

            [
                'name' => 'Alisha Deula',
                'email' => 'alishadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('alisha@123'),
            ],

            [
                'name' => 'Alisha Pujari',
                'email' => 'alishapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('alisha@123'),
            ],

            [
                'name' => 'Alisha Shahi Thakuri',
                'email' => 'alishashahithakuri@gmail.com',
                'type' => 0,
                'password' => bcrypt('alisha@123'),
            ],

            [
                'name' => 'Ameena Gurung',
                'email' => 'ameenagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('ameena@123'),
            ],

            [
                'name' => 'Ameesha Deula',
                'email' => 'ameeshadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('ameesha@123'),
            ],

            [
                'name' => 'Aneela Maharjan',
                'email' => 'aneelamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('aneela@123'),
            ],

            [
                'name' => 'Anehsa Deula',
                'email' => 'aneshadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('anesha@123'),
            ],

            [
                'name' => 'Anisha Shrestha',
                'email' => 'anishashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('anisha@123'),
            ],

            [
                'name' => 'Anjali Tandukar',
                'email' => 'anjalitandukar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjali@123'),
            ],

            [
                'name' => 'Anjeela Shrestha',
                'email' => 'anjeelashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjeela@123'),
            ],

            [
                'name' => 'Anjila Sthapit',
                'email' => 'anjilasthapit@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjila@123'),
            ],

            [
                'name' => 'Ankush Sharma',
                'email' => 'ankushsharma@gmail.com',
                'type' => 0,
                'password' => bcrypt('ankush@123'),
            ],

            [
                'name' => 'Anne Pujari',
                'email' => 'annepujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('anne@123'),
            ],

            [
                'name' => 'Anup Pathak',
                'email' => 'anuppathak@gmail.com',
                'type' => 0,
                'password' => bcrypt('anup@123'),
            ],

            [
                'name' => 'Anusha Adhikari',
                'email' => 'anushaadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('anusha@123'),
            ],

            [
                'name' => 'Anushka Deula',
                'email' => 'anushkadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('anushka@123'),
            ],

            [
                'name' => 'Anuska Shahi',
                'email' => 'anuskashahi@gmail.com',
                'type' => 0,
                'password' => bcrypt('anuska@123'),
            ],

            [
                'name' => 'Anuska Tamrakar',
                'email' => 'anuskatamrakar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anuska@123'),
            ],

            [
                'name' => 'Anzan Shrestha',
                'email' => 'anzanshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('anzan@123'),
            ],

            [
                'name' => 'Arjun Thapa Magar',
                'email' => 'arjunthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('arjun@123'),
            ],

            [
                'name' => 'Arshi Baniya',
                'email' => 'arshibaniya@gmail.com',
                'type' => 0,
                'password' => bcrypt('arshi@123'),
            ],

            [
                'name' => 'Ashma Thapa Magar',
                'email' => 'ashmathapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('ashma@123'),
            ],

            [
                'name' => 'Asmita Khatiwada',
                'email' => 'asmitakhatiwada@gmail.com',
                'type' => 0,
                'password' => bcrypt('asmita@123'),
            ],

            [
                'name' => 'Ayush Manandhar',
                'email' => 'ayushmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('ayush@123'),
            ],

            [
                'name' => 'Ayushma Shrestha',
                'email' => 'ayushmashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('ayushma@123'),
            ],

            [
                'name' => 'Bhumika Gurung',
                'email' => 'bhumikagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('bhumika@123'),
            ],

            [
                'name' => 'Bhuwan Singh',
                'email' => 'bhuwansingh@gmail.com',
                'type' => 0,
                'password' => bcrypt('bhuwan@123'),
            ],

            [
                'name' => 'Bibek Karki',
                'email' => 'bibekkarki@gmail.com',
                'type' => 0,
                'password' => bcrypt('bibek@123'),
            ],

            [
                'name' => 'Bibek Pandit',
                'email' => 'bibekpandit@gmail.com',
                'type' => 0,
                'password' => bcrypt('bibek@123'),
            ],

            [
                'name' => 'Bijina Maharjan',
                'email' => 'bijinamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('bijina@123'),
            ],

            [
                'name' => 'Binit Bohara',
                'email' => 'binitbohara@gmail.com',
                'type' => 0,
                'password' => bcrypt('binit@123'),
            ],

            [
                'name' => 'Binod Mani Tiwari',
                'email' => 'binodmanitiwari@gmail.com',
                'type' => 0,
                'password' => bcrypt('binod@123'),
            ],

            [
                'name' => 'Bitisha Shrestha',
                'email' => 'bitishashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('bitisha@123'),
            ],

            [
                'name' => 'Brinda Deula',
                'email' => 'brindadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('brinda@123'),
            ],

            [
                'name' => 'Britisha Deula',
                'email' => 'britishadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('britisha@123'),
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
                'name' => 'Christina Deula',
                'email' => 'christinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('christina@123'),
            ],

            [
                'name' => 'Cristina Deula',
                'email' => 'cristinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('cristina@123'),
            ],

            [
                'name' => 'Deepali Adhikari',
                'email' => 'deepaliadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepali@123'),
            ],

            [
                'name' => 'Deepika Bramha',
                'email' => 'deepikabramha@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepika@123'),
            ],

            [
                'name' => 'Deepika Dangol',
                'email' => 'deepikadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepika@123'),
            ],

            [
                'name' => 'Deeya Pandey',
                'email' => 'deeyapandey@gmail.com',
                'type' => 0,
                'password' => bcrypt('deeya@123'),
            ],

            [
                'name' => 'Deeya Pujari',
                'email' => 'deeyapujari@gmail.com',
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
                'name' => 'Dipika Deula',
                'email' => 'dipikadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('dipika@123'),
            ],

            [
                'name' => 'Diya Budhathoki',
                'email' => 'diyabudhathoki@gmail.com',
                'type' => 0,
                'password' => bcrypt('diya@123'),
            ],

            [
                'name' => 'Esha Deula',
                'email' => 'eshadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('esha@123'),
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
                'name' => 'Geeta Deula',
                'email' => 'geetadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('geeta@123'),
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
                'name' => 'Hina Deula',
                'email' => 'hinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('hina@123'),
            ],

            [
                'name' => 'Isha Rana Magar',
                'email' => 'isharanamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('isha@123'),
            ],

            [
                'name' => 'Ishwor Chaudhary',
                'email' => 'ishworchaudhary@gmail.com',
                'type' => 0,
                'password' => bcrypt('ishwor@123'),
            ],

            [
                'name' => 'Jamir Maharjan',
                'email' => 'jamirmaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('jamir@123'),
            ],

            [
                'name' => 'Jeena Maharjan',
                'email' => 'jeenamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('jeena@123'),
            ],

            [
                'name' => 'Jenysha Deula',
                'email' => 'jenyshadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('jenysha@123'),
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
                'name' => 'Karina Deula',
                'email' => 'karinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('karina@123'),
            ],

            [
                'name' => 'Karishma Chhetri',
                'email' => 'karishmachhetri@gmail.com',
                'type' => 0,
                'password' => bcrypt('karishma@123'),
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
                'name' => 'Koshika Chapagain',
                'email' => 'koshikachapagain@gmail.com',
                'type' => 0,
                'password' => bcrypt('koshika@123'),
            ],

            [
                'name' => 'Kreetika Deula',
                'email' => 'kreetikadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('kreetika@123'),
            ],

            [
                'name' => 'Krisha Deula',
                'email' => 'krishadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('krisha@123'),
            ],

            [
                'name' => 'Kristina Narasingh Suwal',
                'email' => 'kristinanarasinghsuwal@gmail.com',
                'type' => 0,
                'password' => bcrypt('kristina@123'),
            ],

            [
                'name' => 'Kritika Dangol',
                'email' => 'kritikadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('kritika@123'),
            ],

            [
                'name' => 'Lasata Shakya',
                'email' => 'lasatashakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('lasata@123'),
            ],

            [
                'name' => 'Lasta Maharjan',
                'email' => 'lastamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('lasta@123'),
            ],

            [
                'name' => 'Laxmi Thapa',
                'email' => 'laxmithapa@gmail.com',
                'type' => 0,
                'password' => bcrypt('laxmi@123'),
            ],

            [
                'name' => 'Lina Deula',
                'email' => 'linadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('lina@123'),
            ],

            [
                'name' => 'Lina Manandhar',
                'email' => 'linamanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('lina@123'),
            ],

            [
                'name' => 'Liza Deula',
                'email' => 'lizadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('liza@123'),
            ],

            [
                'name' => 'Lumanti Manandhar',
                'email' => 'lumantimanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('lumanti@123'),
            ],

            [
                'name' => 'Malika Deula',
                'email' => 'malikadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('malika@123'),
            ],

            [
                'name' => 'Malika Prajapati',
                'email' => 'malikaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('malika@123'),
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
                'name' => 'Merina Gurung',
                'email' => 'merinagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('merina@123'),
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
                'name' => 'Norika Rana Magar',
                'email' => 'norikaranamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('norika@123'),
            ],

            [
                'name' => 'Ojaswi Shrestha',
                'email' => 'ojaswishrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('ojaswi@123'),
            ],

            [
                'name' => 'Prabha Deula',
                'email' => 'prabhadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('prabha@123'),
            ],

            [
                'name' => 'Prabin Thapa Magar',
                'email' => 'prabinthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('prabin@123'),
            ],

            [
                'name' => 'Prachi Deula',
                'email' => 'prachideula@gmail.com',
                'type' => 0,
                'password' => bcrypt('prachi@123'),
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
                'name' => 'Pranika Dangol',
                'email' => 'pranikadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('pranika@123'),
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
                'name' => 'Prinsa Maharjan',
                'email' => 'prinsamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('prinsa@123'),
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
                'name' => 'Pushpa Baruwal',
                'email' => 'pushpabaruwal@gmail.com',
                'type' => 0,
                'password' => bcrypt('pushpa@123'),
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
                'name' => 'Rajani Shrestha',
                'email' => 'rajanishrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('rajani@123'),
            ],

            [
                'name' => 'Rakesh Shrestha',
                'email' => 'rakeshshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('rakesh@123'),
            ],

            [
                'name' => 'Reema Bajracharya',
                'email' => 'reemabajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('reema@123'),
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
                'name' => 'Ritika Bogati',
                'email' => 'ritikabogati@gmail.com',
                'type' => 0,
                'password' => bcrypt('ritika@123'),
            ],

            [
                'name' => 'Riya Deula',
                'email' => 'riyadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('riya@123'),
            ],

            [
                'name' => 'Rohan Agrawal',
                'email' => 'rohanagrawal@gmail.com',
                'type' => 0,
                'password' => bcrypt('rohan@123'),
            ],

            [
                'name' => 'Rohina Deula',
                'email' => 'rohinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('rohina@123'),
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
                'name' => 'Roshika Deula',
                'email' => 'roshikadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('roshika@123'),
            ],

            [
                'name' => 'Rosna Ranjit',
                'email' => 'rosnaranjit@gmail.com',
                'type' => 0,
                'password' => bcrypt('rosna@123'),
            ],

            [
                'name' => 'Ruhi Jung Thapa',
                'email' => 'ruhijungthapa@gmail.com',
                'type' => 0,
                'password' => bcrypt('ruhi@123'),
            ],

            [
                'name' => 'Rushma Bajracharya',
                'email' => 'rushmabajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('rushma@123'),
            ],

            [
                'name' => 'Sabbu Deula',
                'email' => 'sabbudeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sabbu@123'),
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
                'name' => 'Salwa Naeem',
                'email' => 'salwanaeem@gmail.com',
                'type' => 0,
                'password' => bcrypt('salwa@123'),
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
                'name' => 'Samikshya Bishwokarma',
                'email' => 'samikshyabishwokarma@gmail.com',
                'type' => 0,
                'password' => bcrypt('samikshya@123'),
            ],

            [
                'name' => 'Samikshya Pariyar',
                'email' => 'samikshyapariyar@gmail.com',
                'type' => 0,
                'password' => bcrypt('samikshya@123'),
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
                'password' => bcrypt('chandan@123'),
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
                'name' => 'Sanzana Pujari',
                'email' => 'sanzanapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanzana@123'),
            ],

            [
                'name' => 'Saru Deula',
                'email' => 'sarudeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('saru@123'),
            ],

            [
                'name' => 'Savana Prajapati',
                'email' => 'savanaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('savana@123'),
            ],

            [
                'name' => 'Seenzo Shrestha',
                'email' => 'seenzoshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('seenzo@123'),
            ],

            [
                'name' => 'Selexna Pathak',
                'email' => 'selexnapathakgmail.com',
                'type' => 0,
                'password' => bcrypt('selexna@123'),
            ],

            [
                'name' => 'Selina Deula',
                'email' => 'selinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('selina@123'),
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
                'name' => 'Shikha Deula',
                'email' => 'shikhadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('shikha@123'),
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
                'name' => 'Shiya Deula',
                'email' => 'shiyadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('shiya@123'),
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
                'name' => 'Simran Deula',
                'email' => 'simrandeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('simran@123'),
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
                'name' => 'Smriti Deula',
                'email' => 'smritideula@gmail.com',
                'type' => 0,
                'password' => bcrypt('smriti@123'),
            ],

            [
                'name' => 'Smriti Maharjan',
                'email' => 'smritimaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('smriti@123'),
            ],

            [
                'name' => 'Sona Deula',
                'email' => 'sonadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sona@123'),
            ],

            [
                'name' => 'Sovia Manandhar',
                'email' => 'soviamanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sovia@123'),
            ],

            [
                'name' => 'Srijana Deula',
                'email' => 'srijanadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
            ],

            [
                'name' => 'Srijana Gurung',
                'email' => 'srijanagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
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
                'password' => bcrypt('student@123'),
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
                'name' => 'Suzeena Pujari',
                'email' => 'suzeenapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('suzeena@123'),
            ],

            [
                'name' => 'Sweta Deula',
                'email' => 'swetadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sweta@123'),
            ],

            [
                'name' => 'Sweta Rauniyar',
                'email' => 'swetarauniyar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sweta@123'),
            ],

            [
                'name' => 'Timila Prajapati',
                'email' => 'timilaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('timila@123'),
            ],

            [
                'name' => 'Tina Deula',
                'email' => 'tinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('timila@123'),
            ],

            [
                'name' => 'Ukey Maharjan',
                'email' => 'ukeymaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('ukey@123'),
            ],

            [
                'name' => 'Unika Maharjan',
                'email' => 'unikamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('unika@123'),
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

            [
                'name' => 'Ziya Deula',
                'email' => 'ziyadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('ziya@123'),
            ],

            /**
             ** Admin Users
             */

            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'type' => 1,
                'password' => bcrypt('admin@123'),
            ],

            /**
             *! Teachers
             */

            [
                'name' => 'Chhetra Bahadur Chhetri',
                'email' => 'chhetrachhetri@gmail.com',
                'type' => 2,
                'password' => bcrypt('chetri@123'),
            ],

            [
                'name' => 'Dinesh Khadka',
                'email' => 'dineshkhadka@gmail.com',
                'type' => 2,
                'password' => bcrypt('dinesh@123'),
            ],

            [
                'name' => 'Jayan Kapali',
                'email' => 'jayankapali@gmail.com',
                'type' => 2,
                'password' => bcrypt('jayan@123'),
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
                'password' => bcrypt('sumit@123'),
            ],

            [
                'name' => 'Teacher',
                'email' => 'teacher@example.com',
                'type' => 2,
                'password' => bcrypt('teacher@123'),
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
                'password' => bcrypt('parent@123'),
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
