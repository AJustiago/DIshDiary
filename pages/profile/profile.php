<?php include '../../components/header/header.php'; ?>
<div class="pcontainer">
    <div class="profile">
        <div class="profile-header">
            <img src="./img/prof.jpg" alt="profile" class="profile-img">
            <div class="profile-text-pcontainer">
                <h1 class="profile-title">Profile Name</h1>
                <p class="profile-email">janesmith@gmail.com</p>
            </div>
        </div>
        <div class="menu">
            <a href="#" class="menu-link"><i class="fa-solid fa-circle-user menu-icon"></i>Account</a>
            <a href="#" class="menu-link"><i class="fa-solid fa-bell menu-icon"></i>Notification</a>
            <a href="#" class="menu-link"><i class="fa-solid fa-gear menu-icon"></i>Setting</a>
            <a href="#" class="menu-link"><i class="fa-solid fa-right-from-bracket menu-icon"></i>Logout</a>
        </div>
    </div>

    <form class="account">
        <div class="account-header">
            <h1 class="account-title">Account Setting</h1>
            <div class="btn-pcontainer">
                <button class="btn-cancel">Cancel</button>
                <button class="btn-save">Save</button>
            </div>
        </div>

        <div class="account-edit">
            <div class="input-pcontainer">
                <label>First Name</label>
                <input type="text" placeholder="First Name">
            </div>
            <div class="input-pcontainer">
                <label>First Name</label>
                <input type="text" placeholder="Last Name">
            </div>                
        </div>

        <div class="account-edit">
            <div class="input-pcontainer">
                <label>Email</label>
                <input type="email" placeholder="Email">
            </div>
            <div class="input-pcontainer">
                <label>Phone Number</label>
                <input type="text" placeholder="Phone Number">
            </div>                
        </div>

        <div class="account-edit">
            <div class="input-pcontainer">
                <label>Bio</label>
                <textarea placeholder="No bio"></textarea>
            </div>                             
        </div>
    </form>
</div>


<?php include '../../components/footer/footer.php'; ?>