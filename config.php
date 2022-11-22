<?php


//INFO
//To Change the Icon of the Website, replace the favicon.ico with your logo (Has to be .ico, and keep the name as favicon.ico)

//Name of your Website
$websitename = "Website Template";

//This is what is Displayed as Tab name in the Browser, and as name of the search result on Google
$websitetitle = "Website Template | Nice Shop";

//This is the Description displayed on Google
$websitedescription = "This is a Website Template for a Shop";

//These are Tags for Search Engines. They are Seperated by a comma
$websitetags = "website template, shop, nice tag, ultra hq";

//URL of the Logo displayed on the Top (Local Path or Link)
$logourl = "assets/images/logo.png";

//Short Description that is Displayed under the Logo on Top of the Website
$websiteshortdesc = "This is a Website Template for Shops <br>using Sellix.io, Selly.io or Shoppy.gg.<br>Everything is fully customizable.";

//Discord Link for the Button on the Bottom Right
$discordlink = "https://discord.gg/";

//Purchase Button Text
$purchasetext = "Purchase";

//Name of the Ecommerce Website ("sellix" = Sellix.io, "shoppy" = Shoppy.gg, "selly" = Selly.io)
$shopwebsite = "sellix";

//Products
$products = [
    [
        //Name of the Category
        "Test Category 1",
        [
            [
                //Name of the Product
                "Sellix Test Product 1",
                //Product ID on the Ecommerce Website
                "5eb6b2bde8a50",
                //Product Logo URL or Path (Should be Transparent or it Will be Displayed with the Background)
                "https://s3-eu-west-1.amazonaws.com/tpd/logos/5f038a919ab82900015059fc/0x0.png",
                //Price of the Product
                "€ 100.00"
            ],
            [
                "Shoppy Test Product 2",
                "Lr4rHJQ",
                "https://shoppy.gg/images/apple-touch-icon-180x180.png",
                "€ 100.00"
            ],
            [
                "Selly Test Product 3",
                "076946e2",
                "https://shoppy.gg/images/apple-touch-icon-180x180.png",
                "€ 100.00"
            ]
        ]
    ],
    [
        //Name of the Category
        "Test Category 2",
        [
            [
                //Name of the Product
                "Sellix Test Product 1",
                //Product ID on the Ecommerce Website
                "5eb6b2bde8a50",
                //Product Logo URL or Path (Should be Transparent or it Will be Displayed with the Background)
                "https://s3-eu-west-1.amazonaws.com/tpd/logos/5f038a919ab82900015059fc/0x0.png",
                //Price of the Product
                "€ 100.00"
            ],
            [
                "Shoppy Test Product 2",
                "Lr4rHJQ",
                "https://shoppy.gg/images/apple-touch-icon-180x180.png",
                "€ 100.00"
            ],
            [
                "Selly Test Product 3",
                "076946e2",
                "https://shoppy.gg/images/apple-touch-icon-180x180.png",
                "€ 100.00"
            ]
        ]
    ]
];

//The 3 Cards where there are Different Selling Points to convince the Customer of Buying your Product
//Structure:
//1. FontAwesome Icon Name (Displayed in a Circle above the Card)
//You can find them on https://fontawesome.com
//If you found one you like and it is Available for Free Users, 
//click on Start using this Icon and copy the name in the HTML There
//2. Headline (Headline of the Card)
//3. Description/Argument
$sellingpoints = [
    [
        "fas fa-money-bill-alt",
        "Cheap",
        "Description"
    ],
    [
        "fas fa-medal",
        "Top rated",
        "Description"
    ],
    [
        "fas fa-user-clock",
        "Fast Support",
        "Description"
    ]
];

//Every Color you Can customize is in Here
$colorconfig = [
    "#2f43b2", //Header Background Color
    "#6a71ff", //1st Color of the Gradient Background for the Sellingpoints Circle, Product Card & Purchase Button
    "#1a12ff", //2nd Color of the Gradient Background for the Sellingpoints Circle, Product Card & Purchase Button
    "#3b35e7", //Underline of Category Titles
    "#1f2cb8", //Price Color
    "#131873" // Purchase Button Shadow Color
];

?>