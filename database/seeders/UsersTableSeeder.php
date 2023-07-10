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
                'gender' => 'Female',
            ],

            [
                'name' => 'Aaisha Pujari',
                'email' => 'aaishapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('aaisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aakash Poudel',
                'email' => 'aakashpoudel@gmail.com',
                'type' => 0,
                'password' => bcrypt('aakash@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Aastha Budhathoki',
                'email' => 'aasthabudhathoki@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayush@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aayush Raj Manandhar',
                'email' => 'aayushmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayush@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Aayush Shakya',
                'email' => 'aayushshakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayush@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Aayusha Karki',
                'email' => 'aayushakarki@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayusha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aayusha Dangol',
                'email' => 'aayushadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayusha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aayusha Maharjan',
                'email' => 'aayushamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayusha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aayusha Prajapati',
                'email' => 'aayushaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayusha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aayushma Adhikari',
                'email' => 'aayushmaadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('aayushma@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ajay Adhikari',
                'email' => 'ajayadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('ajay@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Aleena Deula',
                'email' => 'aleenadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('aleena@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aleena Pujari',
                'email' => 'aleenapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('aleena@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Alina Ghale',
                'email' => 'alinaghale@gmail.com',
                'type' => 0,
                'password' => bcrypt('alina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Alisha Deula',
                'email' => 'alishadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('alisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Alisha Pujari',
                'email' => 'alishapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('alisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Alisha Shahi Thakuri',
                'email' => 'alishashahithakuri@gmail.com',
                'type' => 0,
                'password' => bcrypt('alisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ameena Gurung',
                'email' => 'ameenagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('ameena@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ameesha Deula',
                'email' => 'ameeshadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('ameesha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ameesha Pujari',
                'email' => 'ameeshapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('ameesha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aneela Dangol',
                'email' => 'aneeladangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('aneela@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aneela Maharjan',
                'email' => 'aneelamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('aneela@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Aneela Prajapati',
                'email' => 'aneelaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('aneela@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anehsa Deula',
                'email' => 'aneshadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('anesha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anehsa Pujari',
                'email' => 'aneshapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('anesha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anisha Shrestha',
                'email' => 'anishashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('anisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anjali Tamrakar',
                'email' => 'anjalitamrakar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjali@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anjali Tandukar',
                'email' => 'anjalitandukar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjali@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anjali Tuladhar',
                'email' => 'anjalituladhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjali@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anjeela Shrestha',
                'email' => 'anjeelashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjeela@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anjila Sthapit',
                'email' => 'anjilasthapit@gmail.com',
                'type' => 0,
                'password' => bcrypt('anjila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ankush Sharma',
                'email' => 'ankushsharma@gmail.com',
                'type' => 0,
                'password' => bcrypt('ankush@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Anne Deula',
                'email' => 'annedeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('anne@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anne Pujari',
                'email' => 'annepujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('anne@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anup Pathak',
                'email' => 'anuppathak@gmail.com',
                'type' => 0,
                'password' => bcrypt('anup@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Anusha Adhikari',
                'email' => 'anushaadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('anusha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anushka Deula',
                'email' => 'anushkadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('anushka@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anushka Pujari',
                'email' => 'anushkapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('anushka@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anuska Khadgi',
                'email' => 'anuskakhadgi@gmail.com',
                'type' => 0,
                'password' => bcrypt('anuska@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anuska Shahi',
                'email' => 'anuskashahi@gmail.com',
                'type' => 0,
                'password' => bcrypt('anuska@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anuska Tamrakar',
                'email' => 'anuskatamrakar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anuska@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anuska Tandukar',
                'email' => 'anuskatandukar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anuska@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anuska Tuladhar',
                'email' => 'anuskatuladhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('anuska@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Anzan Shrestha',
                'email' => 'anzanshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('anzan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Arjun Thapa Magar',
                'email' => 'arjunthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('arjun@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Arshi Baniya',
                'email' => 'arshibaniya@gmail.com',
                'type' => 0,
                'password' => bcrypt('arshi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ashma Thapa Magar',
                'email' => 'ashmathapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('ashma@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Asmita Khatiwada',
                'email' => 'asmitakhatiwada@gmail.com',
                'type' => 0,
                'password' => bcrypt('asmita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ayush Manandhar',
                'email' => 'ayushmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('ayush@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Ayushma Shrestha',
                'email' => 'ayushmashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('ayushma@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Bhumika Gurung',
                'email' => 'bhumikagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('bhumika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Bhuwan Singh',
                'email' => 'bhuwansingh@gmail.com',
                'type' => 0,
                'password' => bcrypt('bhuwan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Bibek Karki',
                'email' => 'bibekkarki@gmail.com',
                'type' => 0,
                'password' => bcrypt('bibek@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Bibek Pandit',
                'email' => 'bibekpandit@gmail.com',
                'type' => 0,
                'password' => bcrypt('bibek@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Bijina Dangol',
                'email' => 'bijinadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('bijina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Bijina Maharjan',
                'email' => 'bijinamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('bijina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Bijina Prajapati',
                'email' => 'bijinaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('bijina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Binit Bohara',
                'email' => 'binitbohara@gmail.com',
                'type' => 0,
                'password' => bcrypt('binit@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Binod Mani Tiwari',
                'email' => 'binodmanitiwari@gmail.com',
                'type' => 0,
                'password' => bcrypt('binod@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Bitisha Shrestha',
                'email' => 'bitishashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('bitisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Brinda Deula',
                'email' => 'brindadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('brinda@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Brinda Pujari',
                'email' => 'brindapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('brinda@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Britisha Deula',
                'email' => 'britishadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('britisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Britisha Pujari',
                'email' => 'britishapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('britisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Chadani Manandhar',
                'email' => 'chadanimanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('chadani@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Chandan Shakya',
                'email' => 'chandanshakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('chandan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Chiran Rai',
                'email' => 'chiranrai@gmail.com',
                'type' => 0,
                'password' => bcrypt('chiran@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Christina Deula',
                'email' => 'christinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('christina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Christina Pujari',
                'email' => 'christinapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('christina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Cristina Deula',
                'email' => 'cristinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('cristina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Cristina Pujari',
                'email' => 'cristinapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('cristina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Deepali Adhikari',
                'email' => 'deepaliadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepali@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Deepika Bramha',
                'email' => 'deepikabramha@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Deepika Dangol',
                'email' => 'deepikadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Deepika Maharjan',
                'email' => 'deepikamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Deepika Prajapati',
                'email' => 'deepikaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('deepika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Deeya Pandey',
                'email' => 'deeyapandey@gmail.com',
                'type' => 0,
                'password' => bcrypt('deeya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Deeya Deula',
                'email' => 'deeyadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('deeya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Deeya Pujari',
                'email' => 'deeyapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('deeya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Depen Tamrakar',
                'email' => 'depentamrakar@gmail.com',
                'type' => 0,
                'password' => bcrypt('depen@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Depen Tandukar',
                'email' => 'depentandukar@gmail.com',
                'type' => 0,
                'password' => bcrypt('depen@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Depen Tuladhar',
                'email' => 'depentuladhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('depen@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Devika Ruwali',
                'email' => 'devikaruwali@gmail.com',
                'type' => 0,
                'password' => bcrypt('devika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Dipika Deula',
                'email' => 'dipikadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('dipika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Dipika Pujari',
                'email' => 'dipikapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('dipika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Diya Budhathoki',
                'email' => 'diyabudhathoki@gmail.com',
                'type' => 0,
                'password' => bcrypt('diya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Esha Deula',
                'email' => 'eshadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('esha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Esha Pujari',
                'email' => 'eshapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('esha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Gagan Acharya',
                'email' => 'gaganacharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('gagan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Garima Dangol',
                'email' => 'garimadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('garima@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Garima Maharjan',
                'email' => 'garimamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('garima@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Garima Prajapati',
                'email' => 'garimaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('garima@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Geeta Deula',
                'email' => 'geetadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('geeta@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Geeta Pujari',
                'email' => 'geetapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('geeta@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Grishma Timalsina',
                'email' => 'grishmatimalsina@gmail.com',
                'type' => 0,
                'password' => bcrypt('grishma@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Harati Bajracharya',
                'email' => 'haratibajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('harati@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Hina Deula',
                'email' => 'hinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('hina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Hina Pujari',
                'email' => 'hinapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('hina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Isha Rana Magar',
                'email' => 'isharanamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('isha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ishwor Chaudhary',
                'email' => 'ishworchaudhary@gmail.com',
                'type' => 0,
                'password' => bcrypt('ishwor@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Jamir Dangol',
                'email' => 'jamirdangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('jamir@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Jamir Maharjan',
                'email' => 'jamirmaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('jamir@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Jamir Prajapati',
                'email' => 'jamirprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('jamir@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Jeena Dangol',
                'email' => 'jeenadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('jeena@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Jeena Maharjan',
                'email' => 'jeenamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('jeena@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Jeena Prajapati',
                'email' => 'jeenaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('jeena@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Jenysha Deula',
                'email' => 'jenyshadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('jenysha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Jenysha Pujari',
                'email' => 'jenyshapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('jenysha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kabir Deula',
                'email' => 'kabirdeula167@gmail.com',
                'type' => 0,
                'password' => bcrypt('20600505'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Kabir Pujari',
                'email' => 'kabirpujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('kabir@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Kabita Phuyal',
                'email' => 'kabitaphuyal@gmail.com',
                'type' => 0,
                'password' => bcrypt('kabita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kanchan Karki',
                'email' => 'kanchankarki@gmail.com',
                'type' => 0,
                'password' => bcrypt('kanchan@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Karina Deula',
                'email' => 'karinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('karina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Karina Pujari',
                'email' => 'karinapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('karina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Karishma Chhetri',
                'email' => 'karishmachhetri@gmail.com',
                'type' => 0,
                'password' => bcrypt('karishma@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kasak Shrestha',
                'email' => 'kasakshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('kasak@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kavir Man Singh',
                'email' => 'kavirmansingh@gmail.com',
                'type' => 0,
                'password' => bcrypt('kavir@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Kiran Manandhar',
                'email' => 'kiranmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('kiran@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Koshika Chapagain',
                'email' => 'koshikachapagain@gmail.com',
                'type' => 0,
                'password' => bcrypt('koshika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kreetika Deula',
                'email' => 'kreetikadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('kreetika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kreetika Pujari',
                'email' => 'kreetikapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('kreetika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Krisha Deula',
                'email' => 'krishadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('krisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Krisha Pujari',
                'email' => 'krishapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('krisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kristina Narasingh Suwal',
                'email' => 'kristinanarasinghsuwal@gmail.com',
                'type' => 0,
                'password' => bcrypt('kristina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kritika Dangol',
                'email' => 'kritikadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('kritika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kritika Maharjan',
                'email' => 'kritikamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('kritika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Kritika Prajapati',
                'email' => 'kritikaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('kritika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Lasata Shakya',
                'email' => 'lasatashakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('lasata@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Lasta Dangol',
                'email' => 'lastadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('lasta@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Lasta Maharjan',
                'email' => 'lastamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('lasta@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Lasta Prajapati',
                'email' => 'lastaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('lasta@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Laxmi Thapa',
                'email' => 'laxmithapa@gmail.com',
                'type' => 0,
                'password' => bcrypt('laxmi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Lina Deula',
                'email' => 'linadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('lina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Lina Pujari',
                'email' => 'linapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('lina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Lina Manandhar',
                'email' => 'linamanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('lina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Liza Deula',
                'email' => 'lizadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('liza@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Liza Pujari',
                'email' => 'lizapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('liza@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Lumanti Manandhar',
                'email' => 'lumantimanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('lumanti@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Malika Deula',
                'email' => 'malikadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('malika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Malika Pujari',
                'email' => 'malikapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('malika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Malika Dangol',
                'email' => 'malikadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('malika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Malika Maharjan',
                'email' => 'malikamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('malika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Malika Prajapati',
                'email' => 'malikaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('malika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Manish Pandey',
                'email' => 'manishpandey@gmail.com',
                'type' => 0,
                'password' => bcrypt('manish@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Manita Deula',
                'email' => 'manitadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('manita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Manita Pujari',
                'email' => 'manitapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('manita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Megha Darshandhari',
                'email' => 'meghadarshandhari@gmail.com',
                'type' => 0,
                'password' => bcrypt('megha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Merina Gurung',
                'email' => 'merinagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('merina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Muskan Shilakar',
                'email' => 'muskanshilakar@gmail.com',
                'type' => 0,
                'password' => bcrypt('muskan@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Nandita Rauniyar',
                'email' => 'nanditarauniyar@gmail.com',
                'type' => 0,
                'password' => bcrypt('nandita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Neha Gurung',
                'email' => 'nehagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('neha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Nikita Khadgi',
                'email' => 'nikitakhadgi@gmail.com',
                'type' => 0,
                'password' => bcrypt('nikita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Nikita Shahi',
                'email' => 'nikitashahi@gmail.com',
                'type' => 0,
                'password' => bcrypt('nikita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Nischal Raj Basnet',
                'email' => 'nischalrajbasnet@gmail.com',
                'type' => 0,
                'password' => bcrypt('nischal@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Norika Rana Magar',
                'email' => 'norikaranamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('norika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ojaswi Shrestha',
                'email' => 'ojaswishrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('ojaswi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prabha Deula',
                'email' => 'prabhadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('prabha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prabha Pujari',
                'email' => 'prabhapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('prabha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prabin Thapa Magar',
                'email' => 'prabinthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('prabin@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Prachi Deula',
                'email' => 'prachideula@gmail.com',
                'type' => 0,
                'password' => bcrypt('prachi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prachi Pujari',
                'email' => 'prachipujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('prachi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prachi Khadgi',
                'email' => 'prachikhadgi@gmail.com',
                'type' => 0,
                'password' => bcrypt('prachi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prachi Shahi',
                'email' => 'prachishahi@gmail.com',
                'type' => 0,
                'password' => bcrypt('prachi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Pramod Dangol',
                'email' => 'pramoddangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('pramod@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Pramod Maharjan',
                'email' => 'pramodmaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('pramod@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Pramod Prajapati',
                'email' => 'pramodprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('pramod@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Pranika Dangol',
                'email' => 'pranikadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('pranika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Pranika Maharjan',
                'email' => 'pranikamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('pranika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Pranika Prajapati',
                'email' => 'pranikaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('pranika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Pratikshya Dangol',
                'email' => 'pratikshyadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('pratikshya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Pratikshya Maharjan',
                'email' => 'pratikshyamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('pratikshya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Pratikshya Prajapati',
                'email' => 'pratikshyaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('pratikshya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prazita KC',
                'email' => 'prazitakc@gmail.com',
                'type' => 0,
                'password' => bcrypt('prazita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prinsa Dangol',
                'email' => 'prinsadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('prinsa@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prinsa Maharjan',
                'email' => 'prinsamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('prinsa@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Prinsa Prajapati',
                'email' => 'prinsaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('prinsa@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Promise Lohani',
                'email' => 'promiselohani@gmail.com',
                'type' => 0,
                'password' => bcrypt('promise@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Pujan Tamang',
                'email' => 'pujantamang@gmail.com',
                'type' => 0,
                'password' => bcrypt('pujan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Pushpa Baruwal',
                'email' => 'pushpabaruwal@gmail.com',
                'type' => 0,
                'password' => bcrypt('pushpa@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Rabin Dangol',
                'email' => 'rabindangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('rabin@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Rabin Maharjan',
                'email' => 'rabinmaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('rabin@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Rabin Prajapati',
                'email' => 'rabinprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('rabin@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Rabin Sunar',
                'email' => 'rabinsunar@gmail.com',
                'type' => 0,
                'password' => bcrypt('rabin@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Rahul Thapa Magar',
                'email' => 'rahulthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('rahul@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Rajani Shrestha',
                'email' => 'rajanishrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('rajani@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Rakesh Shrestha',
                'email' => 'rakeshshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('rakesh@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Reema Bajracharya',
                'email' => 'reemabajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('reema@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Rijan Lamichhane',
                'email' => 'rijanlamichhane@gmail.com',
                'type' => 0,
                'password' => bcrypt('rijan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Rijan Rajopadhaya',
                'email' => 'rijanrajopadhaya@gmail.com',
                'type' => 0,
                'password' => bcrypt('rijan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Ritika Bogati',
                'email' => 'ritikabogati@gmail.com',
                'type' => 0,
                'password' => bcrypt('ritika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Riya Deula',
                'email' => 'riyadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('riya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Riya Pujari',
                'email' => 'riyapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('riya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Rohan Agrawal',
                'email' => 'rohanagrawal@gmail.com',
                'type' => 0,
                'password' => bcrypt('rohan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Rohina Deula',
                'email' => 'rohinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('rohina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Rohina Pujari',
                'email' => 'rohinapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('rohina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Rojina Ruwali',
                'email' => 'rojinaruwali@gmail.com',
                'type' => 0,
                'password' => bcrypt('rojina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Roman Dangol',
                'email' => 'romandangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('roman@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Roman Maharjan',
                'email' => 'romanmaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('roman@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Roman Prajapati',
                'email' => 'romanprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('roman@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Romit Manandhar',
                'email' => 'romitmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('romit@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Roshan Thapa Magar',
                'email' => 'roshanthapamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('roshan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Roshika Deula',
                'email' => 'roshikadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('roshika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Roshika Pujari',
                'email' => 'roshikapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('roshika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Rosna Ranjit',
                'email' => 'rosnaranjit@gmail.com',
                'type' => 0,
                'password' => bcrypt('rosna@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ruhi Jung Thapa',
                'email' => 'ruhijungthapa@gmail.com',
                'type' => 0,
                'password' => bcrypt('ruhi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Rushma Bajracharya',
                'email' => 'rushmabajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('rushma@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sabbu Deula',
                'email' => 'sabbudeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sabbu@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sabbu Pujari',
                'email' => 'sabbupujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('sabbu@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sachin Sherchan',
                'email' => 'sachinsherchan@gmail.com',
                'type' => 0,
                'password' => bcrypt('sachin@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sagun Ghimire',
                'email' => 'sagunghimire@gmail.com',
                'type' => 0,
                'password' => bcrypt('sagun@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sahil Dangol',
                'email' => 'sahildangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('sahil@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sahil Maharjan',
                'email' => 'sahilmaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('sahil@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sahil Prajapati',
                'email' => 'sahilprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('sahil@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sakshi Gupta',
                'email' => 'sakshigupta@gmail.com',
                'type' => 0,
                'password' => bcrypt('sakshi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Saloni Shrestha',
                'email' => 'salonishrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('saloni@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Salwa Naeem',
                'email' => 'salwanaeem@gmail.com',
                'type' => 0,
                'password' => bcrypt('salwa@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sameer Ali',
                'email' => 'sameerali@gmail.com',
                'type' => 0,
                'password' => bcrypt('sameer@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Samik Shakya',
                'email' => 'samikshakya@gmail.com',
                'type' => 0,
                'password' => bcrypt('samik@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Samikshya Bishwokarma',
                'email' => 'samikshyabishwokarma@gmail.com',
                'type' => 0,
                'password' => bcrypt('samikshya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Samikshya Pariyar',
                'email' => 'samikshyapariyar@gmail.com',
                'type' => 0,
                'password' => bcrypt('samikshya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Samir Dotel',
                'email' => 'samirdotel@gmail.com',
                'type' => 0,
                'password' => bcrypt('samir@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Samjhana Magar',
                'email' => 'samjhanamagar@gmail.com',
                'type' => 0,
                'password' => bcrypt('samjhana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Samman Narsingh Suwal',
                'email' => 'sammannarsinghsuwal@gmail.com',
                'type' => 0,
                'password' => bcrypt('samman@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sanisha Dangol',
                'email' => 'sanishadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sanisha Maharjan',
                'email' => 'msanisha01@gmail.com',
                'type' => 0,
                'password' => bcrypt('chandan@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sanisha Maharjan',
                'email' => 'sanishamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sanisha Prajapati',
                'email' => 'sanishaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanisha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sanju Mishra',
                'email' => 'sanjumishra@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanju@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Santosh Gurung',
                'email' => 'santoshgurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('santosh@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sanzana Deula',
                'email' => 'sanzanadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanzana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sanzana Pujari',
                'email' => 'sanzanapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('sanzana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Saru Deula',
                'email' => 'sarudeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('saru@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Saru Pujari',
                'email' => 'sarupujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('saru@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Savana Dangol',
                'email' => 'savanadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('savana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Savana Maharjan',
                'email' => 'savanamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('savana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Savana Prajapati',
                'email' => 'savanaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('savana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Seenzo Shrestha',
                'email' => 'seenzoshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('seenzo@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Selexna Pathak',
                'email' => 'selexnapathakgmail.com',
                'type' => 0,
                'password' => bcrypt('selexna@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Selina Deula',
                'email' => 'selinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('selina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Selina Pujari',
                'email' => 'selinapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('selina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shaswot Subedi',
                'email' => 'shaswotsubedi@gmail.com',
                'type' => 0,
                'password' => bcrypt('shaswot@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Shaugat Sapkota',
                'email' => 'shaugatsapkota@gmail.com',
                'type' => 0,
                'password' => bcrypt('shaugat@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sher Bahadur Khadka',
                'email' => 'sherbahadurkhadka@gmail.com',
                'type' => 0,
                'password' => bcrypt('sher@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Shikha Deula',
                'email' => 'shikhadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('shikha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shikha Pujari',
                'email' => 'shikhapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('shikha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shila Dangol',
                'email' => 'shiladangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('shila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shila Maharjan',
                'email' => 'shilamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('shila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shila Prajapati',
                'email' => 'shilaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('shila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shirapa Ranjit',
                'email' => 'shiraparanjit@gmail.com',
                'type' => 0,
                'password' => bcrypt('shirapa@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shirbha Manandhar',
                'email' => 'shirbhamanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('shirbha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shirish Manandhar',
                'email' => 'shirishmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('shirish@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Shiya Deula',
                'email' => 'shiyadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('shiya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shiya Pujari',
                'email' => 'shiyapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('shiya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shreesty Bajracharya',
                'email' => 'shreestybajracharya@gmail.com',
                'type' => 0,
                'password' => bcrypt('shreesty@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Shubham Chhetri',
                'email' => 'shubhamchhetri@gmail.com',
                'type' => 0,
                'password' => bcrypt('shubham@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Shuvechha Shrestha',
                'email' => 'shuvechhashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('shuvechha@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Simon Shrestha',
                'email' => 'simonshrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('simon@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Simran Deula',
                'email' => 'simrandeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('simran@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Simran Pujari',
                'email' => 'simranpujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('simran@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Simran Ghimire',
                'email' => 'simranghimire@gmail.com',
                'type' => 0,
                'password' => bcrypt('simran@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Simrita Thapa',
                'email' => 'simritathapa@gmail.com',
                'type' => 0,
                'password' => bcrypt('simrita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sisam Masbe Kumal',
                'email' => 'sisammasbekumal@gmail.com',
                'type' => 0,
                'password' => bcrypt('sisam@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Smriti Deula',
                'email' => 'smritideula@gmail.com',
                'type' => 0,
                'password' => bcrypt('smriti@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Smriti Pujari',
                'email' => 'smritipujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('smriti@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Smriti Dangol',
                'email' => 'smritidangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('smriti@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Smriti Maharjan',
                'email' => 'smritimaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('smriti@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Smriti Prajapati',
                'email' => 'smritiprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('smriti@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sona Deula',
                'email' => 'sonadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sona@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sona Pujari',
                'email' => 'sonapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('sona@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sovia Manandhar',
                'email' => 'soviamanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sovia@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Srijana Deula',
                'email' => 'srijanadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Srijana Pujari',
                'email' => 'srijanapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Srijana Gurung',
                'email' => 'srijanagurung@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Srijana Dangol',
                'email' => 'srijanadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Srijana Maharjan',
                'email' => 'srijanamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Srijana Prajapati',
                'email' => 'srijanaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('srijana@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Student',
                'email' => 'student@example.com',
                'type' => 0,
                'password' => bcrypt('student@123'),
                'gender' => 'NULL',
            ],

            [
                'name' => 'Sudarshan Dahal',
                'email' => 'sudarshandahal@gmail.com',
                'type' => 0,
                'password' => bcrypt('sudarshan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sudina Shrestha',
                'email' => 'sudinashrestha@gmail.com',
                'type' => 0,
                'password' => bcrypt('sudina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sulash Manandhar',
                'email' => 'sulashmanandhar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sulash@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Suman Adhikari',
                'email' => 'sumanadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('suman@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sumina Kunwar',
                'email' => 'suminakunwar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sumina@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sushmita Adhikari',
                'email' => 'sushmitaadhikari@gmail.com',
                'type' => 0,
                'password' => bcrypt('sushmita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sushmita Deula',
                'email' => 'sushmitadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sushmita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sushmita Pujari',
                'email' => 'sushmitapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('sushmita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Suzeena Deula',
                'email' => 'suzeenadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('suzeena@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Suzeena Pujari',
                'email' => 'suzeenapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('suzeena@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sweta Deula',
                'email' => 'swetadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('sweta@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sweta Pujari',
                'email' => 'swetapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('sweta@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Sweta Rauniyar',
                'email' => 'swetarauniyar@gmail.com',
                'type' => 0,
                'password' => bcrypt('sweta@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Timila Dangol',
                'email' => 'timiladangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('timila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Timila Maharjan',
                'email' => 'timilamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('timila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Timila Prajapati',
                'email' => 'timilaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('timila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Tina Deula',
                'email' => 'tinadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('timila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Tina Pujari',
                'email' => 'tinapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('timila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ukey Dangol',
                'email' => 'ukeydangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('ukey@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ukey Maharjan',
                'email' => 'ukeymaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('ukey@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ukey Prajapati',
                'email' => 'ukeyprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('ukey@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Unika Dangol',
                'email' => 'unikadangol@gmail.com',
                'type' => 0,
                'password' => bcrypt('unika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Unika Maharjan',
                'email' => 'unikamaharjan@gmail.com',
                'type' => 0,
                'password' => bcrypt('unika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Unika Prajapati',
                'email' => 'unikaprajapati@gmail.com',
                'type' => 0,
                'password' => bcrypt('unika@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Urmila Tamang',
                'email' => 'urmilatamang@gmail.com',
                'type' => 0,
                'password' => bcrypt('urmila@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Yangchhen Lama Tamang',
                'email' => 'yangchhenlamatamang@gmail.com',
                'type' => 0,
                'password' => bcrypt('yangchhen@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ziya Deula',
                'email' => 'ziyadeula@gmail.com',
                'type' => 0,
                'password' => bcrypt('ziya@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Ziya Pujari',
                'email' => 'ziyapujari@gmail.com',
                'type' => 0,
                'password' => bcrypt('ziya@123'),
                'gender' => 'Female',
            ],

            /**
             ** Admin Users
             */

            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'type' => 1,
                'password' => bcrypt('admin@123'),
                'gender' => 'NULL',
            ],

            /**
             *! Teachers
             */

            [
                'name' => 'Chhetra Bahadur Chhetri',
                'email' => 'chhetrachhetri@gmail.com',
                'type' => 2,
                'password' => bcrypt('chetri@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Dinesh Khadka',
                'email' => 'dineshkhadka@gmail.com',
                'type' => 2,
                'password' => bcrypt('dinesh@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Jayan Kapali',
                'email' => 'jayankapali@gmail.com',
                'type' => 2,
                'password' => bcrypt('jayan@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Khusbu Kumari Sarraf',
                'email' => 'khusbukumarisarraf@gmail.com',
                'type' => 2,
                'password' => bcrypt('khusbu@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Laxmi Adhikari',
                'email' => 'laxmiadhikari@gmail.com',
                'type' => 2,
                'password' => bcrypt('laxmi@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Mausam Shah',
                'email' => 'mausamshah@gmail.com',
                'type' => 2,
                'password' => bcrypt('mausam@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Nabaraj Bahadur Negi',
                'email' => 'nabarajbahadurnegi@gmail.com',
                'type' => 2,
                'password' => bcrypt('nabaraj@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Pramod Khadka',
                'email' => 'pramodkhadka@gmail.com',
                'type' => 2,
                'password' => bcrypt('pramod@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Ram Pokhrel',
                'email' => 'rampokhrel@gmail.com',
                'type' => 2,
                'password' => bcrypt('ram@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sachhita Maharjan',
                'email' => 'sachhitamaharjan@gmail.com',
                'type' => 2,
                'password' => bcrypt('sachita@123'),
                'gender' => 'Female',
            ],

            [
                'name' => 'Santosh Bhusal',
                'email' => 'santoshbhusal@gmail.com',
                'type' => 2,
                'password' => bcrypt('santosh@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Saroj Thapa',
                'email' => 'sarojthapa@gmail.com',
                'type' => 2,
                'password' => bcrypt('saroj@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sujesh Manandhar',
                'email' => 'sujeshmanandhar@gmail.com',
                'type' => 2,
                'password' => bcrypt('sujesh@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Sumit Ghising',
                'email' => 'sumitghising@gmail.com',
                'type' => 2,
                'password' => bcrypt('sumit@123'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Teacher',
                'email' => 'teacher@example.com',
                'type' => 2,
                'password' => bcrypt('teacher@123'),
                'gender' => 'NULL',
            ],

            [
                'name' => 'Yubaraj Devkota',
                'email' => 'yubrajdevkota@gmail.com',
                'type' => 2,
                'password' => bcrypt('yubraj@123'),
                'gender' => 'Male',
            ],

            /**
             ** Parent
             */

            [
                'name' => 'Hari Lama',
                'email' => 'harilama@gmail.com',
                'type' => 3,
                'password' => bcrypt('harilama'),
                'gender' => 'Male',
            ],

            [
                'name' => 'Parent',
                'email' => 'parent@example.com',
                'type' => 3,
                'password' => bcrypt('parent@123'),
                'gender' => 'NULL',
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
