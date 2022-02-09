
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
       /* Google Fonts Import Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    .sidebar{
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 260px;
        background: #003147;
        z-index: 100;
        transition: all 0.5s ease;
        border-left: 10px solid #ffe699;
    }
    .sidebar.close{
        width: 78px;
    }
    .sidebar .logo-details{
        height: 60px;
        width: 100%;
        display: flex;
        align-items: center;
    }
    .sidebar .logo-details i{
        font-size: 30px;
        color: #fff;
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
    }
    .sidebar .logo-details .logo_name{
        font-size: 22px;
        color: #fff;
        font-weight: 600;
        transition: 0.3s ease;
        transition-delay: 0.1s;
    }
    .sidebar.close .logo-details .logo_name{
        transition-delay: 0s;
        opacity: 0;
        pointer-events: none;
    }
    .sidebar .nav-links{
        height: 100%;
        padding: 30px 0 150px 0;
        overflow: auto;
    }
    .sidebar.close .nav-links{
        overflow: visible;
    }
    .sidebar .nav-links::-webkit-scrollbar{
        display: none;
    }
    .sidebar .nav-links li{
        position: relative;
        list-style: none;
        transition: all 0.4s ease;
    }
    .sidebar .nav-links li:hover{
        background: #1d1b31;
    }
    .sidebar .nav-links li .iocn-link{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .sidebar.close .nav-links li .iocn-link{
        display: block
    }
    .sidebar .nav-links li i{
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .sidebar .nav-links li.showMenu i.arrow{
        transform: rotate(-180deg);
    }
    .sidebar.close .nav-links i.arrow{
        display: none;
    }
    .sidebar .nav-links li a{
        display: flex;
        align-items: center;
        text-decoration: none;
    }
    .sidebar .nav-links li a .link_name{
        font-size: 18px;
        font-weight: 400;
        color: #fff;
        transition: all 0.4s ease;
    }
    .sidebar.close .nav-links li a .link_name{
        opacity: 0;
        pointer-events: none;
    }
    .sidebar .nav-links li .sub-menu{
        padding: 6px 6px 14px 80px;
        margin-top: -10px;
        background: #1d1b31;
        display: none;
    }
    .sidebar .nav-links li.showMenu .sub-menu{
        display: block;
    }
    .sidebar .nav-links li .sub-menu a{
        color: #fff;
        font-size: 15px;
        padding: 5px 0;
        white-space: nowrap;
        opacity: 0.6;
        transition: all 0.3s ease;
    }
    .sidebar .nav-links li .sub-menu a:hover{
        opacity: 1;
    }
    .sidebar.close .nav-links li .sub-menu{
        position: absolute;
        left: 100%;
        top: -10px;
        margin-top: 0;
        padding: 10px 20px;
        border-radius: 0 6px 6px 0;
        opacity: 0;
        display: block;
        pointer-events: none;
        transition: 0s;
    }
    .sidebar.close .nav-links li:hover .sub-menu{
        top: 0;
        opacity: 1;
        pointer-events: auto;
        transition: all 0.4s ease;
    }
    .sidebar .nav-links li .sub-menu .link_name{
        display: none;
    }
    .sidebar.close .nav-links li .sub-menu .link_name{
        font-size: 18px;
        opacity: 1;
        display: block;
    }
    .sidebar .nav-links li .sub-menu.blank{
        opacity: 1;
        pointer-events: auto;
        padding: 3px 20px 6px 16px;
        opacity: 0;
        pointer-events: none;
    }
    .sidebar .nav-links li:hover .sub-menu.blank{
        top: 50%;
        transform: translateY(-50%);
    }
    .sidebar .profile-details{
        position: fixed;
        bottom: 0;
        width: 250px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #003147;
        padding: 12px 0;
        transition: all 0.5s ease;
    }
    .sidebar.close .profile-details{
        background: none;
    }
    .sidebar.close .profile-details{
        width: 78px;
    }
    .sidebar .profile-details .profile-content{
        display: flex;
        align-items: center;
    }
    .sidebar .profile-details img{
        height: 52px;
        width: 52px;
        object-fit: cover;
        border-radius: 16px;
        margin: 0 14px 0 12px;
        background: #1d1b31;
        transition: all 0.5s ease;
    }
    .sidebar.close .profile-details img{
        padding: 10px;
    }
    .sidebar .profile-details .profile_name,
    .sidebar .profile-details .job{
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        white-space: nowrap;
    }
    .sidebar.close .profile-details i,
    .sidebar.close .profile-details .profile_name,
    .sidebar.close .profile-details .job{
        display: none;
    }
    .sidebar .profile-details .job{
        font-size: 12px;
    }
    .home-section{
        position: relative;
        background: #f5f5f5;
        height: 100%;
        left: 260px;
        width: calc(100% - 260px);
        transition: all 0.5s ease;
    }
    .sidebar.close ~ .home-section{
        left: 78px;
        width: calc(100% - 78px);
    }

    .home-section .home-content{
        height: 60px;
        display: flex;
        align-items: center;
        background: white;
    }
    .home-section .home-content .bx-menu,
    .home-section .home-content .text{
        color: #11101d;
        font-size: 35px;
    }
    .home-section .home-content .bx-menu{
        margin: 0 15px;
        cursor: pointer;
    }
    .home-section .home-content .text{
        font-size: 26px;
        font-weight: 600;
    }
    @media (max-width: 420px) {
        .sidebar.close .nav-links li .sub-menu{
            display: none;
        }
    }


    .navigation
        {
            position: fixed;
            width: 300px;
            height: 300%;
            background: #003147;
            color:white;
            transition: 0.5s;
            overflow: hidden;
            border-left: 10px solid #ffe699;

        }
        .navigation.active
        {
            width: 65px;
        }


        .navigation ul
        {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            padding-left: 0px;

        }
        .navigation ul li
        {
            position: relative;
            width:100%;
            list-style: none;

        }
        .navigation ul li:hover
        {
            background: #03a9f4;
        }
        .navigation ul li:nth-child(1)
        {
            margin-bottom: 20px;
        }
        .navigation ul li:nth-child(1):hover
        {
            background: transparent;
        }
        .navigation ul li a
        {
            text-decoration: none;
            color:white;
            display:block;
            width: 100%;
            display: flex;
        }
        .navigation ul li a .icon
        {
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 60px;
            text-align: center;
        }
        .navigation ul li a .icon .fa
        {
           font-size: 24px;

        }
        .navigation ul li a .title
        {
           position: relative;
           display: block;
           padding: 0 10px;
           height: 60px;
           line-height: 60px;
           white-space: nowrap;
        }
        .main
        {
            position: absolute;
            width: calc(100% - 300px);
            left: 300px;
            min-height: 100vh;
            background: #f5f5f5;
            transition: 0.5s;
        }
        .main.active
        {
            width: calc(100% - 65px);
            left:65px;
        }
        .main .topbar
        {
            width:100%;
            background: #ffff;
            padding-right: 10px;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .toggle
        {
            position:relative;
            width: 60px;
            height: 60px;
            cursor: pointer;
        }
        .toggle::before
        {
            content: '\f0c9';
            font-family: fontAwesome;
            position: absolute;
            width: 100%;
            height: 100%;
            line-height: 60px;
            font-size: 24px;
            text-align: center;
            color:black;
        }
        .search
        {
            position: relative;
            width: 400px;
            margin:0 10px;

        }
        .search label
        {
            position:+relative;
            width: 100%;
        }
        .search label input
        {
            width: 100%;
            height: 40px;
            border-radius: 20px;
            padding:5px 40px;
            padding-left: 35px;
            outline: none;
            border: 1px solid rgba(0, 0, 0, 0.2)''

        }
        .search label .fa
        {
            position: absolute;
            left:15px;
            top: 10px
        }
        .user
        {
            position: relative;
            min-width: 50px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }
        .user img
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .cardbox
        {
            position: relative;
            width: 100%;
            padding: 20px;
            display:grid;
            grid-template-columns: repeat(4,1fr);
            grid-gap: 20px;
        }
        .cardbox .card
        {
            position: relative;
            background: white;
            padding:20px;
            display: flex;
            justify-content: space-between;
        }
        .cardbox .card .numbers
        {
            position: relative;
            font-size: 2em;
            font-weight: 500;
        }
        .cardbox .card .cardName
        {

            color: #999;
        }
        .cardbox .card .iconBox
        {

            color: #03a9f4;
            font-size: 2.5em;
        }
        .cardbox .card:hover
        {

            background: #ffe699;
            cursor: pointer;

        }
        .details
        {
            position: relative;
            width: 100%;
            padding:20px;
            padding-top: 0;
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-gap: 20px;
        }
        .details .recentOrders
        {
            position:relative;

            min-height: 530px;
            background: white;
            padding: 20px;
        }
        .cardHeader
        {
            display: flex;
            justify-content: space-between;
            align-items: flex-start

        }
        .cardHeader
        {
            font-weight: 600px;
        }
        .btn
        {
            position: relative;
            padding:5px 10px;
            background: #03a9f4;
            color: #f5f5f5;
            text-decoration: none;
            border-radius: 6px;
        }
        .details table
        {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .details table thead td
        {
            font-weight: 600;
        }
        .details .recentOrders table tr
        {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        .details .recentOrders table tbody tr:hover
        {
            background: #03a9f4;
            color: #f5f5f5;

        }
        .details .recentOrders table tbody tr
        {
           padding: 20px;
        }
        .details .recentOrders table tbody tr td
        {
           padding: 9px 5px;
        }



        .details .recentCustomers table tbody tr:hover
        {
            background: #03a9f4;
            color: #f5f5f5;

        }
        .details .recentCustomers table tbody tr
        {
           padding: 20px;
        }
        .details .recentCustomers table tbody tr td
        {
           padding: 9px 5px;
        }



        .details .recentOrders table tbody tr:last-child
        {
            border-bottom: none;
        }
        .details .recentOrders table thead tr td:last-child,
        .details .recentOrders table tbody tr td:last-child
        {
            text-align: right;
        }
        .details .recentOrders table thead tr td:nth-child(2),
        .details .recentOrders table tbody tr td:nth-child(2)
        {
            text-align: right;
            padding-right: 20px;
        }
        .details .recentOrders table thead tr td:nth-child(3),
        .details .recentOrders table tbody tr td:nth-child(3)
        {
            text-align: center;
        }
        .status
        {
            position:relative;
            padding: 2px 4px;
            background: red;
            border-radius: 4px;
            font-size: 14px;
            color: white;
            font-weight: 300;
            letter-spacing: 1px;

        }
        .delivered
        {
            background: forestgreen;
        }
        .navigation ul li.active
        {
            background-color: #ffe699;


        }

        .navigation ul li.active a
        {
           color: darkslategrey;

        }

        .pending
        {
            background: goldenrod;
        }
        .return
        {
            background: red;
        }
        .inprogress
        {
            background: dodgerblue;
        }
        .details .recentCustomers
        {
            position:relative;
            display: grid;
            background: white;
            padding: 20px;
            min-height: 530px;
        }
        .details .recentCustomers .imgBox
        {
            position: relative;
            width:40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
        }
        .details .recentCustomers .imgBox img
        {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .details .recentCustomers table tr td h4
        {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.2em;
        }
        .details .recentCustomers table tr td h4 span
        {
            font-size: 14px;
            color: #999;
        }
        .details .recentCustomers table tr:hover,
        .details .recentCustomers table tr:hover td h4 span
        {
            color: white;
        }

        @media (max-width:992px)
        {
            .cardbox
            {

                grid-template-columns: repeat(2,1fr);

            }
            .details
            {
                grid-template-columns: repeat(1,1fr);
            }
            .navigation{
                width: 65px;
            }
            .navigation.active
            {
                left: 0;
                width: 300px;
            }

            .main
            {
                /* width: 100%;
                left:0; */
                width: calc(100% - 65px);
                left:65px;
            }


            .main.active
            {
                width: calc(100%-300px);
                left: 300px;
            }

        }

        @media(max-width:768px)
        {
            .cardHeader h2
            {
                font-weight: 600;
                font-size: 18px;
            }
        }

        @media(max-width:657px)
        {
            .cardbox
            {

                grid-template-columns: repeat(1,1fr);

            }



            .main
            {
                width: 100%;
                left:0;
                /* width: calc(100% - 65px);
                left:65px; */
            }
            .details .recentOrders table
            {
                width: 600px;
            }
            .details .recentOrders
            {
                overflow-x: auto;
            }
            /* .navigation
            {
                width: 100%;
                left: -100%;
                z-index: 1000;
            }
            .navigation.active
            {
                width: 100%;
                left: 0px;
            } */
            .navigation.active
            {
                width: 100%;
                left: 0;
            }
            .navigation
            {
                z-index: 1000;
                width: 100%;
                left: -100%;
            }
            .toggle
            {
                z-index: 1000;
            }

        }
        .mainContent{
            margin-top: 20px;
        }



   </style>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Bofill</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Applicant</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Applicant</a></li>
          <li><a href="#">New</a></li>
          <li><a href="#">Update</a></li>
          <li><a href="#">--</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Questionaire</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Questionaire</a></li>
          <li><a href="#">View All</a></li>
          <li><a href="#">New Questionaire</a></li>
          <li><a href="#">Update Questionaire</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-lock' ></i>
          <span class="link_name">Password</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Password</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">Prem Shahi</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Drop Down Sidebar</span>
    </div>
    <section class="mainContent">
        <div class="cardbox">
            <div class="card">
                <div>
                    <div class="numbers">1,055</div>
                    <div class="cardName">New Applicants</div>
                </div>
                <div class="iconBox"><i class="bx bx-history"></i></div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">1,055</div>
                    <div class="cardName">Total Passed</div>
                </div>
                <div class="iconBox"><i class="bx bx-history"></i></div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">1,055</div>
                    <div class="cardName">Total Failed</div>
                </div>
                <div class="iconBox"><i class="bx bx-history"></i></div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">1,055</div>
                    <div class="cardName">Total Applicants</div>
                </div>
                <div class="iconBox"><i class="bx bx-history"></i></div>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Applicants</h2>
                    <a href="{{ route('admin.applicants') }}" class="btn">View all</a>
                </div>
                <div class="cardBody">

                    <table>
                        <thead>
                            <tr>
                                <td>Applicant's Name</td>
                                <td>Examination Date</td>
                                <td>Rating</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Emma Smith</td>
                                <td>05 May 2021, 5:20 pm</td>
                                <td>8.5</td>
                                <td><span class="status delivered">Passed</span> </td>
                            </tr>
                            <tr>
                                <td>Melody Macy</td>
                                <td>10 Nov 2021, 8:43 pm
                                </td>
                                <td>7.9</td>
                                <td><span class="status delivered">Passed</span> </td>
                            </tr>
                            <tr>
                                <td>Max Smith</td>
                                <td>15 Apr 2021, 9:23 pm</td>
                                <td>5.8</td>
                                <td><span class="status return">Failed</span> </td>
                            </tr>
                            <tr>
                                <td>Sean Bean</td>
                                <td>21 Feb 2021, 9:23 pm</td>
                                <td>7.5</td>
                                <td><span class="status delivered">Passed</span> </td>
                            </tr>
                            <tr>
                                <td>Brian Cox</td>
                                <td>15 Apr 2021, 11:05 am</td>
                                <td>5.6</td>
                                <td><span class="status return">Failed</span> </td>
                            </tr>
                            <tr>
                                <td>Mikaela Collins</td>
                                <td>20 Jun 2021, 6:05 pm</td>
                                <td>9.1</td>
                                <td><span class="status delivered">Passed</span> </td>
                            </tr>
                            <tr>
                                <td>Francis Mitchan</td>
                                <td>24 Jun 2021, 11:30 am</td>
                                <td>9.3</td>
                                <td><span class="status delivered">Passed</span> </td>
                            </tr>
                            <tr>
                                <td>Olivia Wild</td>
                                <td>24 Jun 2021, 10:10 pm</td>
                                <td>5.1</td>
                                <td><span class="status return">Failed</span> </td>
                            </tr>
                            <tr>
                                <td>Neil Owen</td>
                                <td>25 Jul 2021, 6:05 pm</td>
                                <td>4.9</td>
                                <td><span class="status return">Failed</span> </td>
                            </tr>
                            <tr>
                                <td>Dan Wilson</td>
                                <td>10 Mar 2021, 11:30 am</td>
                                <td>8.7</td>
                                <td><span class="status delivered">Passed</span> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Customers</h2>
                    <a href="#" class="btn">View all</a>
                </div>
                <table>
                    <tbody>
                        <tr>

                            <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                            <td><h4>David <br><span>Italy</span></h4></td>

                        </tr>
                        <tr>

                            <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                            <td><h4>David <br><span>Italy</span></h4></td>

                        </tr>
                        <tr>

                            <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                            <td><h4>David <br><span>Italy</span></h4></td>

                        </tr>
                        <tr>

                            <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                            <td><h4>David <br><span>Italy</span></h4></td>

                        </tr>
                        <tr>

                            <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                            <td><h4>David <br><span>Italy</span></h4></td>

                        </tr>
                        <tr>

                            <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                            <td><h4>David <br><span>Italy</span></h4></td>

                        </tr>
                        </tbody>
                </table>
            </div>





        </div>
    </section>
  </section>

  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });

//   if ($(window).width() < 960) {
//    alert('Less than 960');
// }
// else {
//    alert('More than 960');
// }

window.addEventListener('resize', event => {
    //alert(screen.width);
  if(screen.width < 757)
  {
    alert(screen.width);
    //  document.querySelector(".sidebar").classList.remove("close");

    document.querySelector(".sidebar").classList.add("close");
  }
});
  </script>
</body>
</html>








