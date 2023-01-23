<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
    <div class="page d-flex">
        @include('admin.sidebar')
        <div class="content w-full">
            <!-- start head -->
            @include('admin.nav')
            <!-- end head -->
            <h1 class="p-relative">{{'Dashboard'}}</h1>
            <!-- start wrapper -->
            <div class="wrapper d-grid gap-20">
                <!-- start welcome widget -->
                <div class="welcome p-relative bg-white rad-10 text-c-mobile block-mobile">
                    <div class="intro p-20 d-flex space-between bg-eee">
                        <div>
                            <h2 class="m-0">Bienvenue</h2>
                            <p class="c-gray mt-5">Admin</p>
                        </div>
                        <img class="hide-in-mobile" src="adminDash/images/welcome.png" alt="welcome">
                    </div>
                    <img src="adminDash/images/avatar1.png" alt="" class="avatar">
                    <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile b-bottom">
                        <div>Admin <span class="d-block c-gray fs-14 mt-10"></span></div>
                        <div><span class="d-block c-gray fs-14 mt-10"></span></div>
                        <div><span class="d-block c-gray fs-14 mt-10"></span></div>
                    </div>
                    <a href="profile.html" class="visit d-block fs-14 rad-6 bg-blue c-white w-fit btn-shape">Profile</a>
                </div>
                <!-- end welcome widget -->
                <!-- start Quick draft widget -->
                <div class="Quick-draft p-20 bg-white rad-10">
                    <h2 class="mt-0 mb-10">Brouillon</h2>
                    <p class="mt-0 mb-20 c-gray fs-15">Rédigez un brouillon pour vos idées</p>
                    <form action="">
                        <input class="d-block mb-20 w-full bg-eee b-none p-10 rad-6" type="text" placeholder="Draft Title">
                        <textarea class="d-block mb-20 w-full bg-eee b-none p-10 rad-6" name="" placeholder="Your Thought"></textarea>
                        <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="enregistrer">
                    </form>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>