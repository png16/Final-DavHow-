<?php 
    session_start();

    include("../connection.php");
    include("../functions.php");

    $user_data = null;
    if (isset($_SESSION['user_id'])) {
        $user_data = check_login($con);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DavHow: PSA Birth Certificate</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="header.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<header class="header1">
        <div class="top-bar">
            <div class="top-left">
                <div class="time">
                    <div class="display-time"></div>
                    <div class="display-date">
                        <span id="month">month</span>
                        <span id="daynum">00</span>
                        <span id="year">0000</span>
                        <span id="day">day</span>
                    </div>
                </div>
                <div class="socmeds">
                    <a href="https://www.facebook.com/profile.php?id=61560047196528" target="_blank"><i class="ri-facebook-circle-fill"></i></a>
                    <a href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
                    <a href="mailto:artsolutions24@email.com" target="_blank"><i class="ri-mail-fill"></i></a>
                </div>
            </div>
          
            <div class="logo">
                <img src="../photos/logo.png" alt="DavHow: Unsaon ni Bai?">
                <p class="Brand">DavHow</p>
                <p class="Tagline">UNSAON NI BAI?</p>
            </div>
            <nav class="nav1">
                <?php if (isset($user_data)): ?>
                <span class="greeting">Madayaw, <?php echo htmlspecialchars($user_data['user_name']); ?></span>
                <a href="#" onclick="logout()" class="logout-button" id="logout-btn"><i class="ri-logout-box-r-line"></i></a>
                <?php else: ?>
                <a href="../login.php"><ion-icon name="person-circle-outline" class="nav_login" id="login-btn"></ion-icon></a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <header class="header" id="header">
        <nav class="nav container">
        <p class="nav_tag"><em>Official website of ART Solutions</em></p>
        <div class="nav_menu" id="nav-menu">
           <ul class="nav_list">
                <?php
                    // Assume $isLoggedIn and $isAdmin are set based on authentication logic
                    $isLoggedIn = isset($_SESSION['user_id']); // Check if user is logged in
                    $isAdmin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1; // Check if user is logged in as admin

                    // Check if the user is logged in as admin, user, or not logged in
                    if ($isAdmin) {
                        echo '
                        <li class="nav_item">
                            <a href="../homepage.php" class="nav_link">HOME</a>
                        </li>
                        <li class="nav_item">
                            <a href="../catalog.php" class="nav_link">CATALOG</a>
                        </li>
                        <li class="nav_item">
                            <a href="../about_us.php" class="nav_link">ABOUT US</a>
                        </li>
                        <li class="nav_item">
                            <a href="../discussionforum.php" class="nav_link">FORUM</a>
                        </li>
                        <li class="nav_item">
                            <a href="../adminpanel_usermessages.php" class="nav_link">MESSAGES</a>
                        </li>';
                    } elseif ($isLoggedIn) {
                        echo '
                        <li class="nav_item">
                            <a href="../homepage.php" class="nav_link">HOME</a>
                        </li>
                        <li class="nav_item">
                            <a href="../catalog.php" class="nav_link">CATALOG</a>
                        </li>
                        <li class="nav_item">
                            <a href="../about_us.php" class="nav_link">ABOUT US</a>
                        </li>
                        <li class="nav_item">
                            <a href="../discussionforum.php" class="nav_link">FORUM</a>
                        </li>';
                    } else {
                        echo '
                        <li class="nav_item">
                            <a href="../homepage.php" class="nav_link">HOME</a>
                        </li>
                        <li class="nav_item">
                            <a href="../catalog.php" class="nav_link">CATALOG</a>
                        </li>
                        <li class="nav_item">
                            <a href="../about_us.php" class="nav_link">ABOUT US</a>
                        </li>';
                    }
                ?>

            </ul>
    
                <!-- Close button -->
                <div class="nav_close" id="nav-close">
                    <i class="ri-close-circle-line"></i>
                </div>
            </div>
    
            <div class="nav_actions">
                <!-- Search button -->
                <a href="../search/search_page.php"><i class="ri-search-line nav_search" id="search-btn"></i></a>
    
                <!-- Toggle button -->
                <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>


    <div class="whole-document-area">
    <!-- Document-Area -->
    <section class="document-area">
        <div class="image-wrapper">
            <img src="background-header.png" alt="">
            <div class="document-text">
                <h1>PSA Issued Birth Certificate</h1>
                <p>A birth certificate is a crucial official document that verifies a person's birth. It serves as a fundamental means of confirming identity and is essential for legal purposes, including the ability to engage in transactions and execute contracts. This document contains key information such as the individual's full name, date and place of birth, as well as the names of the parents. It is widely used for official identification purposes and is a prerequisite for various official transactions, including passport applications.</p>
            </div>
        </div>
    </section>    
    <section class="button-area">
        <div class="information-option">
            <input type="radio" id="tap1" name="tap" checked>
            <input type="radio" id="tap2" name="tap">
            <input type="radio" id="tap3" name="tap">
            <input type="radio" id="tap4" name="tap">
            <input type="radio" id="tap5" name="tap">
            <input type="radio" id="tap6" name="tap">

            <!-- Curved Navigation Menu Indicator -->
            <div class="slider"></div>      
            
            <!--Buttons -->
            <div>
                <div>
                    <label for="tap1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 31 31">
                        <g clip-path="url(#a)">
                            <path stroke="#FFF3F3" stroke-linecap="round" stroke-linejoin="round" d="M25.823 27.353a2.149 2.149 0 0 1-2.149 2.15H4.333a2.15 2.15 0 0 1-2.15-2.15V3.714a2.149 2.149 0 0 1 2.15-2.15h12.004c.57 0 1.116.227 1.52.63l7.337 7.338c.403.403.63.95.63 1.52v16.301ZM15.204 14.19h5.372m-5.372 7.455h5.372"/>
                            <path stroke="#FFF3F3" stroke-linecap="round" stroke-linejoin="round" d="m6.893 21.523 1.8 1.8 3.002-4.2m-4.802-5.189 1.8 1.801 3.002-4.202"/>
                        </g>
                        <defs>
                            <clipPath id="a">
                            <path fill="#fff" d="M.64.49h30.086v30.086H.64z"/>
                            </clipPath>
                        </defs>
                        </svg>           
                    </label>
                </div>
                <span>Requirements</span>
            </div>
            <div>
                <div>
                    <label for="tap2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 32 32">
                        <g clip-path="url(#a)">
                            <path stroke="#FFF1F1" stroke-linecap="round" stroke-linejoin="round" d="M28.2 2.593H3.434a2.251 2.251 0 0 0-2.252 2.25v9.006a2.251 2.251 0 0 0 2.252 2.252h24.764a2.251 2.251 0 0 0 2.252-2.252V4.844a2.251 2.251 0 0 0-2.252-2.251Z"/>
                            <path stroke="#FFF1F1" stroke-linecap="round" stroke-linejoin="round" d="M7.937 10.472a1.126 1.126 0 1 0 0-2.251 1.126 1.126 0 0 0 0 2.251Zm9.006-1.125h7.88M3.435 16.1a2.251 2.251 0 0 0-2.252 2.252v9.005a2.251 2.251 0 0 0 2.252 2.252h24.764a2.252 2.252 0 0 0 2.252-2.252v-9.005a2.252 2.252 0 0 0-2.252-2.251"/>
                            <path stroke="#FFF1F1" stroke-linecap="round" stroke-linejoin="round" d="M7.937 23.98a1.126 1.126 0 1 0 0-2.251 1.126 1.126 0 0 0 0 2.251Zm9.006-1.125h7.88"/>
                        </g>
                        <defs>
                            <clipPath id="a">
                            <path fill="#fff" d="M.058.341h31.519V31.86H.058z"/>
                            </clipPath>
                        </defs>
                        </svg>          
                    </label>
                </div>
                <span>Procedures</span>
            </div>
            <div>
                <div>
                    <label for="tap3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 34 34">
                        <path stroke="#000"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M27.997 12.11c0 7.06-10.822 15.298-10.822 15.298S6.353 19.17 6.353 12.11c0-5.768 4.928-10.591 10.822-10.591 5.895 0 10.822 4.823 10.822 10.591Z"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M17.175 15.64c1.992 0 3.607-1.58 3.607-3.53 0-1.95-1.615-3.531-3.607-3.531-1.992 0-3.607 1.58-3.607 3.53 0 1.95 1.615 3.53 3.607 3.53Zm9.805 8.238h2.22l3.607 8.238H1.544l3.607-8.238H7.37"/>
                        </svg> 
                    </label>       
                </div>
                <span>Location</span>
            </div>
            <div>
                <div>
                    <label for="tap4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 31 31">
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M19.654 16.508c5.214 0 9.44-1.879 9.44-4.196 0-2.317-4.226-4.196-9.44-4.196-5.213 0-9.44 1.879-9.44 4.196 0 2.317 4.227 4.196 9.44 4.196Z"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M10.214 12.312v12.587c0 2.308 4.196 4.196 9.44 4.196 5.245 0 9.44-1.888 9.44-4.196V12.312"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M29.095 18.605c0 2.308-4.196 4.196-9.44 4.196-5.245 0-9.44-1.888-9.44-4.195m9.23-14.667a14.202 14.202 0 0 0-8.182-2.098c-5.224 0-9.44 1.888-9.44 4.196 0 1.238 1.217 2.35 3.147 3.147"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M4.97 21.77c-1.93-.796-3.147-1.908-3.147-3.146V6.037"/>
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M4.97 15.477c-1.93-.797-3.147-1.909-3.147-3.146"/>
                        </svg> 
                    </label>         
                </div>
                <span>Fees</span>
            </div>
            <div>
                <div>
                    <label for="tap5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 32 32">
                        <g clip-path="url(#a)">
                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M3.435 30.734h24.764a2.251 2.251 0 0 0 2.252-2.251V3.718a2.251 2.251 0 0 0-2.252-2.251H3.435a2.251 2.251 0 0 0-2.252 2.251v24.765a2.251 2.251 0 0 0 2.252 2.251Z"/>
                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="m3.997 30.735 16.435-15.49a1.125 1.125 0 0 1 1.441 0l8.578 6.146M10.189 13.85a3.377 3.377 0 1 0 0-6.755 3.377 3.377 0 0 0 0 6.754Z"/>
                        </g>
                        <defs>
                            <clipPath id="a">
                            <path fill="#fff" d="M.058.341h31.519V31.86H.058z"/>
                            </clipPath>
                        </defs>
                        </svg> 
                    </label>         
                </div>
                <span>Preview</span>
            </div>
            <div>
                <div>
                    <label for="tap6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 30 30">
                        <g clip-path="url(#a)">
                            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="M21.469 26.714a5.244 5.244 0 1 0 0-10.49 5.244 5.244 0 0 0 0 10.49Zm7.341 2.096-3.63-3.629M15.175 4.686a3.147 3.147 0 0 0-3.147-3.146H1.54v20.978h10.49m3.145-17.832v9.44m0-9.44a3.147 3.147 0 0 1 3.147-3.147h10.49v14.685"/>
                        </g>
                        <defs>
                            <clipPath id="a">
                            <path fill="#fff" d="M.49.49h29.37v29.37H.49z"/>
                            </clipPath>
                        </defs>
                        </svg>  
                    </label>  
                </div>
                <span>References</span>
            </div>            
        </div>
    </section>
    <!-- Information sections -->
    <section class="information-area">
        <!-- Requirements -->
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>Principal (Document Owner)</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Valid Identity Document (ID)</h3>
                <p>1 original</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF) - Birth Certificate (White Form)</h3>
                <p>1 copy</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>Authorized Representative</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Valid Identity Document (ID) of the document owner</h3>
                <p>1 original and 1 photocopy</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Valid Identity Document (ID) of the authorized representative</h3>
                <p>1 original and 1 photocopy</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Authorization letter or duly notarized Special Power of Attorney (SPA)</h3>
                <p>1 original</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF) - Birth Certificate (White Form)</h3>
                <p>1 copy</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>Immediate Family Member of the Document Owner</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Valid Identity Document (ID) of requesting immediate family member</h3>
                <p>1 original and 1 photocopy</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF) - Birth Certificate (White Form)</h3>
                <p>1 copy</p>
            </div>
        </div>
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>Guardian of Document Owner who is a Minor or Below 18 Years of Age</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Court decision assigning the requester as legal guardian</h3>
                <p>1 original and/or photocopy</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Duly notarized Affidavit of Guardianship</h3>
                <p>1 original</p>
                <p>Supported by any of the following:</p>
                <ul>
                    <li>Barangay Certification that the minor is in the custody of the requesting party/guardian (1 original)</li>
                    <li>School ID/Report Card of the minor that indicates the name of the requester as Guardian (1 original and 1 photocopy)</li>
                </ul>
            </div>
            <div class="info-box">
                <h3 class="requirement">Valid Identity Document (ID) of the Guardian</h3>
                <p>1 original and 1 photocopy</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF)- Birth Certificate (White Form)</h3>
                <p>1 copy</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>Nearest of Kin of a Deceased Person (Brother/Sister/Grandparent)</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Duly notarized Affidavit of Kinship</h3>
                <p>1 original</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Valid Identity Document (ID) of the nearest of kin requesting the document</h3>
                <p>1 original and 1 photocopy</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF) - Birth Certificate (White Form)</h3>
                <p>1 copy</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>Senior Citizen requesting for his/her own document, spouse, parents and son/daughter</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Senior Citizen’s ID Card or any valid ID indicating his/her age complete with clear photo, full name in print, signature and issued by an official authority</h3>
                <p>1 original</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF) - Birth Certificate (White Form) accomplished in printed letters</h3>
                <p>1 copy</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>Physically Challenged Client/PWD requesting for his/her own document, spouse, parents and son/daughter</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">PWD ID Card complete with clear photo, full name in print, signature and issued by an official authority</h3>
                <p>1 original</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF) - Birth Certificate (White Form) accomplished in printed letters</h3>
                <p>1 copy</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>Pregnant Woman requesting for her own document, spouse, parents and son/daughter</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Valid Identity Document (ID) of the pregnant woman complete with clear photo, full name in print, signature and issued by an official authority</h3>
                <p>1 original</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF) - Birth Certificate (White Form) accomplished in printed letters</h3>
                <p>1 copy</p>
            </div>
        </div>
        
        <div class="requirement-info">
            <div class="eligibility-type info-box">
                <img src="/New DavHow/valid_id/icons/backto-icon.svg" alt="">
                <h2>First Time Job Seeker (RA 11261)</h2>
            </div>
            <div class="info-box">
                <h3 class="requirement">Duly signed Barangay Certification from his/her place of residence</h3>
                <p>1 original</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Oath of Undertaking executed by the First Time Job Seeker</h3>
                <p>1 original and 1 photocopy</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Valid Identity Document (ID) of the First Time Job Seeker</h3>
                <p>1 original and 1 photocopy</p>
            </div>
            <div class="info-box">
                <h3 class="requirement">Completely filled-up Application Form (AF) - Birth Certificate (White Form)</h3>
                <p>1 copy</p>
            </div>
        </div>        

         <!-- Procedure -->
         <div class="procedure-info">
            <div class="subtype">
                <div class="category">
                    <img src="/New DavHow/valid_id/icons/black_backto-icon.svg" alt="">
                    <p class="subtype-text"><strong>Online Application</strong></p>
                </div><hr>
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>1</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Go to the PSAHelpline.ph website homepage</h3>
                        <p>Click the “Order Now” button located on the right side of the screen or in the header.</p>
                    </div>
                </div>
            
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>2</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Select Birth Certificate</h3>
                        <p>On the next page, click the “Birth” button. Check the box at the bottom of the page to accept the terms and conditions. Click “Continue” to proceed to the next step.</p>
                    </div>
                </div>
            
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>3</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Choose Request Type</h3>
                        <p>The next page will display two options: Select “My Own Birth Certificate” if you are requesting your own certificate. Choose “For Someone Else” if you are ordering for a family member or another person. Confirm your choice and click “Continue.”</p>
                    </div>
                </div>
            
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>4</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Prepare Required Information</h3>
                        <p>A page will appear listing the information needed for the application. Ensure you have all the specified data ready before proceeding. Click “Continue” to move to the next step.</p>
                    </div>
                </div>
            
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>5</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Provide Personal Details</h3>
                        <p>Fill out the form with the following details: Your sex. Civil status (if female). First name. Middle name. Last name. Birth date. Type of government-issued ID you possess. After completing the form, click “Continue.”</p>
                    </div>
                </div>
            
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>6</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Enter Delivery Information</h3>
                        <p>A new page will ask for your name and delivery address. Input the required information and click “Continue.”</p>
                    </div>
                </div>
            
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>7</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Review and Confirm Details</h3>
                        <p>Carefully review the Certificate of Live Birth form to ensure all details are accurate. Choose the number of copies you need. Tick the “I Confirm” box to verify that the information is correct.</p>
                    </div>
                </div>
            
                <div class="info-box">
                    <div class="circle-background">
                        <div class="procedure-number">
                            <p>8</p>
                        </div>
                    </div>
                    <div class="info-details">
                        <h3 class="requirement">Complete the Order</h3>
                        <p>Follow any additional on-screen instructions to finalize your order. You may need to provide payment information to complete the transaction.</p>
                    </div>
                </div>
            </div>


            <div class="procedure-info">
                <div class="subtype">
                    <div class="category">
                        <img src="/New DavHow/valid_id/icons/black_backto-icon.svg" alt="">
                        <p class="subtype-text"><strong>Walk in Application</strong></p>
                    </div><hr>
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Get and Fill Out Application Form</h3>
                            <p>Obtain an Application Form - Birth Certificate (White Form) from the Information Marshal’s booth. Fill out the required information in printed letters.</p>
                        </div>
                    </div>
            
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Submit Documents for Completeness Check</h3>
                            <p>Submit the filled-out form and required documents to the Payment Window for a completeness check. If you are a first-time job seeker, proceed to the Public Assistance and Complaint Desk (PACD) inside the outlet for further instructions.</p>
                        </div>
                    </div>
            
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>3</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Pay the Corresponding Fee</h3>
                            <p>Pay the necessary fee for the birth certificate request at the designated payment window. Obtain the Official Receipt (OR) after payment.</p>
                        </div>
                    </div>
            
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>4</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Proceed to the Releasing Area</h3>
                            <p>Go to the Releasing Area and wait for the document owner’s name to be called.</p>
                        </div>
                    </div>
            
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>5</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Wait for Name to be Called</h3>
                            <p>Listen for the announcement of the document owner’s name.</p>
                        </div>
                    </div>
            
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>6</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Fall in Line at the Releasing Window</h3>
                            <p>Once the document owner’s name is called, fall in line at the specified Releasing Window.</p>
                        </div>
                    </div>
            
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>7</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Present OR and Other Requirements</h3>
                            <p>Present the Official Receipt (OR) and any other required documents to the staff at the Releasing Window.</p>
                        </div>
                    </div>
            
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>8</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Check the Document</h3>
                            <p>Verify the accuracy of the details on the birth certificate.</p>
                        </div>
                    </div>
            
                    <div class="info-box">
                        <div class="circle-background">
                            <div class="procedure-number">
                                <p>9</p>
                            </div>
                        </div>
                        <div class="info-details">
                            <h3 class="requirement">Acknowledge Receipt</h3>
                            <p>Sign the “Received by” portion at the back of the application form. Indicate the date of receipt on the form.</p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        

        <div class="location-info" hidden>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23914.91754813268!2d125.59983506196379!3d7.092275119269062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96c4d43af266b%3A0x9892745afc8ca94e!2sPhilippine%20Statistics%20Authority!5e0!3m2!1sen!2sph!4v1716411718076!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="details-container">
                <!-- LIST OF LOCATIONS -->
                <div class="location-details">
                    <strong><p>Philippine Statistics Authority</p></strong>    
                    <table>
                        <tr>
                            <td>Address</td>
                            <td>Ango Building, Cabaguio Avenue Davao City, Davao del Sur 8000</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>psaregion11@yahoo.com.ph</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>(082) 221-3593/ (082) 221-8338/ (082) 224-1140</td>
                        </tr>
                    </table>                    
                </div>
            </div>
        </div>
        

        <!--Fees-->
        <div class="fee-info" hidden>
            <div class="no-fee">
                <p>Pursuant to RA 11261, the issuance of one (1) copy of the birth certificate for a first time job seeker is to be issued for free</p> 
            </div>
            <div class="fee">
                <table>
                        <tr>
                            <strong><td class="fee-name">Processing Fee (per copy)</td></strong>
                            <td rowspan="2">Php 150.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location"></td>                    
                        </tr>
                </table>
            </div>
            <div class="fee">
                <table>
                        <tr>
                            <strong><td class="fee-name">Documentary Stamp Tax</td></strong>
                            <td rowspan="2">Php 30.00</td>
                        </tr>
                        <tr>
                            <td class="fee-location"></td>                    
                        </tr>
                </table>
            </div>
            <div class="total-fee fee">
                <table>
                        <tr>
                            <td class="fee-total">Total to pay:</td>
                            <td rowspan="2"><strong>PHP 180.00</strong></td>
                        </tr>
                </table>
            </div>
        </div>     
        
        <!--Sample Photo-->
        <div class="samplephoto-info" >
            <p>DISCLAIMER: This is a sample photo of a document.</p>
            <div class="img-magnifier-container" onmouseover="magnify(reference-photo, 3)">
                <img id="reference-photo" src="/New DavHow/documents/document_images/PSA issued Birth Certificate.jpg" alt="">
            </div>
        </div>

        <!--References-->
        <div class="reference-info">
            <div class="article-reference">
                <a href="https://psahelpline.ph/" target="_blank">PSA Online Application</a>
            </div>
            <div class="article-reference">
                <a href="https://psa.gov.ph/system/files/citizen%20charter/2023%20PSA%20Citizen's%20Charter%20FINAL_ONSEdit_v1_RRDH_MLAG-Approved%20(3).pdf" target="_blank">PSA Citizen Charter</a>
            </div>
            <div class="article-reference">
                <a href="httpspin.itkOUpsff7n" target="_blank">Sample PSA Birth Certificate</a>
            </div>
        </div>
    </section>
</div>
    <footer>
        <div class="footerrow">
        <div class="col">
            <h3>What is Davhow?</h3>
            <p class="footertag">DavHow provides a comprehensive, user-friendly platform for accessing and acquiring various legal documents, complete with clear guidelines and requirements.</p>
            <div class="socmeds1">
            <a href="https://www.facebook.com/profile.php?id=61560047196528"><i class="ri-facebook-circle-fill"></i></a>
            <a href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
            <a href="mailto:artsolutions24@email.com"><i class="ri-mail-fill"></i></a>
            </div>
        </div>
        <div class="col">
            <h3>Visit Us</h3>
            <p>University of the Philippines Mindanao</p>
            <p>Tugbok, Davao City</p>
            <p>8000 Philippines</p>
        </div>
        <div class="col">
            <h3>Links</h3>
            <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="discussionforum.php">Forum</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>About DavHow</h3>
            <ul>
                <li><a href="homepage.php#services1">Our Services</a></li>
                <li><a href="homepage.php#rationale">Rationale</a></li>
                <li><a href="homepage.php#vision">Vision and Mission</a></li>
                <li><a href="homepage.php#objectives">Objectives</a></li>
            </ul>
        </div>
        </div>
        <hr>
        <p class="copyright">&copy; 2024 <i>ART Solutions. All rights reserved.</i></p>
    </footer>
    <!-- Back to Top Button -->
    <a href="#"><button id="back-to-top-btn" title="Back to top"><i class="ri-arrow-up-s-fill"></i></button></a>
    <script src="script.js"></script>
</body>
</html>