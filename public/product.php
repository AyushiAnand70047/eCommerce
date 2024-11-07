<?php

include('../includes/db.php');

$sql = "INSERT INTO products (name, price, description, category, gallery) VALUES 
    ('Apple Watch', 41900, 'Apple Watch Series 9 GPS 41mm Midnight Aluminium Case with Midnight Sport Band - S/M', 'Watch', 'https://rukminim2.flixcart.com/image/416/416/xif0q/smartwatch/s/q/r/-original-imagte6xkwbyutkk.jpeg?q=70&crop=false'),
    ('Canon Camera', 95190, 'Canon EOS R10 Mirrorless Camera Body with RF-S 18 - 150 mm f/3.5 - 6.3 IS STM Lens Kit', 'Camera', 'https://rukminim2.flixcart.com/image/416/416/l5fnhjk0/dslr-camera/f/t/m/eos-r10-24-2-r10-canon-original-imagg42fsbgv79da.jpeg?q=70&crop=false'),
    ('Hair Straightner', 1345, 'PHILIPS Alia Bhatt New Edition Hair Straightener (Black)', 'Straightner', 'https://rukminim2.flixcart.com/image/416/416/xif0q/hair-straightener/c/c/u/alia-bhatt-new-edition-philips-original-imagm9yqh2zzeqpa.jpeg?q=70&crop=false'),
    ('Nova Trimmer', 1749, 'NOVA NHT 1056 Trimmer 180 min Runtime 40 Length Settings (White, Blue)', 'Trimmer', 'https://rukminim2.flixcart.com/image/416/416/xif0q/trimmer/v/i/h/0-5-20-mm-nht-1056-stainless-steel-corded-cordless-nova-original-imah45gugcbctuhz.jpeg?q=70&crop=false'),
    ('Boat Earbud', 1099, 'boAt Airdopes 161 w/ 50HRS Playback, ENx Tech, 13mm Drivers, Beast Mode & ASAP Charge Bluetooth (Carbon Black, True Wireless)', 'Earbud', 'https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/3/k/z/-original-imah3g9sxxphqgbp.jpeg?q=70&crop=false'),
    ('Sandisk Pendrive', 2059, 'SanDisk SDDDC3-256G-I35 256 GB OTG Drive (Black, Type A to Type C)', 'Pendrive', 'https://rukminim2.flixcart.com/image/416/416/k79dd3k0/pendrive/type-a-to-type-c/9/8/g/sandisk-sdddc3-256g-i35-original-imafpjhvzwhdd9ec.jpeg?q=70&crop=false'),
    ('Lenovo Laptop', 37999, 'Lenovo IdeaPad Slim 1 AMD Ryzen 5 Hexa Core 5500U - (16 GB/512 GB SSD/Windows 11 Home) 15ALC7 Thin and Light Laptop (39.62 cm, Cloud Grey, 1.65 kg, With MS Office)', 'Laptop', 'https://rukminim2.flixcart.com/image/416/416/xif0q/computer/n/e/r/-original-imah2h5h5zs2gjej.jpeg?q=70&crop=false'),
    ('Ambrane Powerbank', 2900, 'Ambrane 10000 mAh 22.5 W Wireless With MagSafe Power Bank (Purple, Lithium Polymer, Fast Charging, Power Delivery 3.0, Quick Charge 3.0 for Earbuds, Laptop, Mobile, Smartwatch, Tablet, Trimmer)', 'Powerbank', 'https://rukminim2.flixcart.com/image/416/416/xif0q/power-bank/y/q/b/-original-imah439zxhbh6ueg.jpeg?q=70&crop=false'),
    ('Intex Keyboard', 499, 'Intex IT-KB331 / Full-Size, RGB Lighting, Membrane Wired USB Gaming Keyboard (Black)', 'Keyboard', 'https://rukminim2.flixcart.com/image/416/416/xif0q/keyboard/h/p/m/-original-imagv2xmvgnwcvmu.jpeg?q=70&crop=false'),
    ('Boat Headset', 2499, 'boAt Rockerz 450 Pro with Upto 70 Hours Playback Bluetooth (Aqua Blue, On the Ear)', 'Headset', 'https://rukminim2.flixcart.com/image/416/416/kmccosw0/headphone/9/h/j/rockerz-450-pro-boat-original-imagf9gyd4u6w85z.jpeg?q=70&crop=false'),
    ('Samsung Tab', 18999, 'SAMSUNG Galaxy Tab A9+ 4 GB RAM 64 GB ROM 11.0 inch with Wi-Fi Only Tablet (GRAPHITE)', 'Tab', 'https://rukminim2.flixcart.com/image/416/416/xif0q/tablet/v/4/h/-original-imagu5gbhgbjqvh6.jpeg?q=70&crop=false'),
    ('Frontech Mouse', 189, 'Frontech MS-0047 Wired Optical Mouse (USB 2.0, USB 3.0, Black)', 'Mouse', 'https://rukminim2.flixcart.com/image/416/416/xif0q/mouse/x/x/z/ms-0047-frontech-original-imahfmf63tjmaea8.jpeg?q=70&crop=false'),
    ('Bluetooth Soundbar', 300, 'ZEBRONICS ZEB-PSPK 31 (Vita Bar 200) with TWS, 24 W Bluetooth Soundbar  (Black, Stereo Channel)', 'Soundbar', 'https://rukminim2.flixcart.com/image/416/416/xif0q/speaker/soundbar/z/6/g/zeb-pspk-31-zebronics-original-imah5mzytyznkfvj.jpeg?q=70&crop=false'),
    ('Panasonic TV', 400, 'A smart TV with many features', 'TV', 'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg'),
    ('Sony TV', 500, 'A TV with many features', 'TV', 'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png'),
    ('LG Fridge', 200, 'A fridge with many features', 'Fridge', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU')
";

if ($conn->query($sql) === TRUE) {
    echo "Produccts inserted successfully";
} else {
    echo "Error in inserting data";
}

$conn->close();

?>