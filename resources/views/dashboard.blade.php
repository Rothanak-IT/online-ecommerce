<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💻Dashboard</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Dashboard.css">
</head>
<style>
    :root {
        --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
            "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
            "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    *,
    *::before,
    *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;

    }

    nav {
        display: block;
    }

    body {
        margin: 0;
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
            "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #515151;
        text-align: left;
        background-color: #e9edf4;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    a {
        color: #3f84fc;
        text-decoration: none;
        background-color: transparent;
    }

    a:hover {
        color: #0458eb;
        text-decoration: underline;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        font-family: "Nunito", sans-serif;
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    h1,
    .h1 {
        font-size: 2.5rem;
        font-weight: normal;
    }

    .card {
        position: relative;

        display: flex;

        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0;
    }

    .card-body {

        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        text-align: center;
    }

    .dashboard {

        display: flex;
        min-height: 100vh;
    }

    .dashboard-app {

        display: flex;

        flex-grow: 2;
        margin-top: 84px;
    }

    .dashboard-content {

        flex-grow: 2;
        padding: 25px;
    }

    .dashboard-nav {
        min-width: 238px;
        /* position: fixed; */
        left: 0;
        top: 0;
        bottom: 0;
        /* overflow: auto; */
        background-color: #373193;
        margin-top: 6%;
    }

    .dashboard-compact .dashboard-nav {
        display: none;
    }

    .dashboard-nav header {
        min-height: 84px;
        padding: 8px 27px;

        display: flex;

        align-items: center;
    }

    .dashboard-nav header .menu-toggle {
        display: none;
        margin-right: auto;
    }

    .dashboard-nav a {
        color: #515151;
    }

    .dashboard-nav a:hover {
        text-decoration: none;
    }

    /* .dashboard-nav {
  background-color: #443ea2;
} */

    .dashboard-nav a {
        color: #fff;
    }

    .brand-logo {
        font-family: "Nunito", sans-serif;
        font-weight: bold;
        font-size: 20px;

        display: flex;
        color: #515151;

        align-items: center;
    }

    .brand-logo:focus,
    .brand-logo:active,
    .brand-logo:hover {
        color: #dbdbdb;
        text-decoration: none;
    }

    .brand-logo i {
        color: #d2d1d1;
        font-size: 27px;
        margin-right: 10px;
    }

    .dashboard-nav-list {

        display: flex;

        flex-direction: column;
    }

    .dashboard-nav-item {
        min-height: 56px;
        padding: 8px 20px 8px 70px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;

        align-items: center;
        letter-spacing: 0.02em;
        transition: ease-out 0.5s;
    }

    .dashboard-nav-item1 {
        min-height: 56px;
        padding: 8px 20px 8px 70px;

        display: flex;

        align-items: center;
        letter-spacing: 0.02em;
        transition: ease-out 0.5s;
    }

    .dashboard-nav-item i {
        width: 36px;
        font-size: 19px;
        margin-left: -40px;
    }

    .dashboard-nav-item1 i {
        width: 36px;
        font-size: 19px;
        margin-left: 0px;

    }

    .dashboard-nav-item:hover {
        background: rgba(255, 255, 255, 0.04);
    }

    .active {
        background: rgba(0, 0, 0, 0.1);
    }

    .dashboard-nav-dropdown {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;

        flex-direction: column;
    }

    .dashboard-nav-dropdown.show {
        background: rgba(255, 255, 255, 0.04);
    }

    .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-toggle {
        font-weight: bold;
    }

    .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-toggle:after {

        transform: none;
    }

    .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-menu {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .dashboard-nav-dropdown-toggle:after {
        content: "";
        margin-left: auto;
        display: inline-block;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid rgba(81, 81, 81, 0.8);

        transform: rotate(90deg);
    }

    .dashboard-nav .dashboard-nav-dropdown-toggle:after {
        border-top-color: rgba(255, 255, 255, 0.72);
    }

    .dashboard-nav-dropdown-menu {
        display: none;

        flex-direction: column;
    }

    .dashboard-nav-dropdown-item {
        min-height: 40px;
        padding: 8px 20px 8px 70px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;

        align-items: center;
        transition: ease-out 0.5s;
    }

    .dashboard-nav-dropdown-item:hover {
        background: rgba(255, 255, 255, 0.04);
    }

    .menu-toggle {
        position: relative;
        width: 42px;
        height: 42px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;

        align-items: center;

        justify-content: center;
        color: #443ea2;
    }

    .menu-toggle:hover,
    .menu-toggle:active,
    .menu-toggle:focus {
        text-decoration: none;
        color: #875de5;
    }

    .menu-toggle i {
        font-size: 20px;
    }

    .dashboard-toolbar {
        min-height: 84px;
        background-color: DodgerBlue;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 27px;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1000;
    }

    .nav-item-divider {
        height: 1px;
        /* margin: 1rem 0; */
        overflow: hidden;
        background-color: rgba(236, 238, 239, 0.3);
    }

    @media (min-width: 992px) {
        .dashboard-app {
            /* margin-left: 238px; */
        }

        .dashboard-compact .dashboard-app {
            margin-left: 0;
        }
    }

    @media (max-width: 768px) {
        .dashboard-content {
            padding: 15px 0px;
        }
    }

    @media (max-width: 992px) {
        .dashboard-nav {
            display: none;
            position: fixed;
            top: 54px;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 1070;
        }

        .dashboard-nav.mobile-show {
            display: block;
        }
    }

    @media (max-width: 992px) {
        .dashboard-nav header .menu-toggle {

            display: flex;
        }
    }

    @media (min-width: 992px) {
        .dashboard-toolbar {
            /* left: 238px; */
        }

        .dashboard-compact .dashboard-toolbar {
            left: 0;
        }
    }
</style>

<body>
    <div class='dashboard'>
        @include('includes.header')
        <div class='dashboard-app'>
            @include('includes.menu')
            <div class='dashboard-content'>
                <div class='container'>
                    <h3>Dashboard</h3>
                    <div class='card'>
                        <div class='card-header'>
                            <div class="row justify-content-center">
                                <div style="display:flex;flex-wrap:wrap;gap:10px;justify-content:center;">
                                    <div
                                        style="background:#b3b3ff;padding:20px;flex:1 1 200px;display:flex;align-items:center;justify-content:center;border-radius:10px;">
                                        <span style="font-size:20px;">👤 Total Customers:</span></div>
                                    <div
                                        style="background:#d699ff;padding:20px;flex:1 1 200px;display:flex;align-items:center;justify-content:center;border-radius:10px;">
                                        <span style="font-size:20px;">🛒 Total Order:</span></div>
                                    <div
                                        style="background:#80ccff;padding:20px;flex:1 1 200px;display:flex;align-items:center;justify-content:center;border-radius:10px;">
                                        <span style="font-size:20px;">📚 Total Products:</span></div>
                                    <div
                                        style="background:#668000;padding:20px;flex:1 1 200px;display:flex;align-items:center;justify-content:center;color:white;border-radius:10px;">
                                        <span style="font-size:20px;">🍔 Total Category:</span></div>
                                </div>

                            </div>
                        </div>
                        <div class='card-body'>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const mobileScreen = window.matchMedia("(max-width: 990px )");
        $(document).ready(function() {
            $(".dashboard-nav-dropdown-toggle").click(function() {
                $(this).closest(".dashboard-nav-dropdown")
                    .toggleClass("show")
                    .find(".dashboard-nav-dropdown")
                    .removeClass("show");
                $(this).parent()
                    .siblings()
                    .removeClass("show");
            });
            $(".menu-toggle").click(function() {
                if (mobileScreen.matches) {
                    $(".dashboard-nav").toggleClass("mobile-show");
                } else {
                    $(".dashboard").toggleClass("dashboard-compact");
                }
            });
        });
    </script>
</body>

</html>


