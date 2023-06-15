<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.homecss')
</head>

<body>
   @include('user.header')


    <div class="container">

        <!-- ---------Left Sidebar ------------ -->
        @include('user.left_sidebar')



        <!-- ---------Main Content ------------ -->
         @include('user.main')



        <!-- ---------Right Sidebar ------------ -->
         @include('user.right_sidebar')
         
        <!-- ---------Footer -------------->
        @include('user.footer')

</body>

</html>