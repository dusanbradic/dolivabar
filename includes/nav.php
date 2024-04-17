<header>
    <nav class="flex flex-wrap items-center justify-center md:justify-between mx-auto mb-2">
        <a href="/" class="flex items-center">
            <img src="assets/images/dolivabarlogo.png" class="h-40 w-40" alt="Doliva bar Logo" />
        </a>
        <ul class="flex flex-row text-lg  font-medium">
            <?php if($activePage === "index") {
                echo '<li class="block mr-2 md:mr-4 text-wine border-b-2 border-wine">';
            } else {
                echo '<li class="block mr-2 md:mx-4 hover:border-b-2 hover:text-wine border-wine">';
            }?>
                <a href="./index.php" aria-current="page">Welcome</a>
            </li>
            <?php if($activePage === "wines") {
                echo '<li class="block mx-2 md:mx-4 text-wine border-b-2 border-wine">';
            } else {
                echo '<li class="block mx-2 md:mx-4 hover:border-b-2 hover:text-wine border-wine">';
            }?>
                <a href="./wines.php"  aria-current="page">Wines</a>
            </li>
            <?php if($activePage === "events") {
                echo '<li class="block mx-1 md:mx-4 text-wine border-b-2 border-wine">';
            } else {
                echo '<li class="block mx-1 md:mx-4 hover:border-b-2 hover:text-wine border-wine">';
            }?>
                <a href="./events.php"  aria-current="page">Events</a>
            </li>
            <li class="block mx-1 md:mx-4 hover:border-b-2 border-wine hover:text-wine">
                <a href="https://www.google.com/maps/place/D'oliva+bar/@44.8207596,20.4640557,17z/data=!4m8!3m7!1s0x475a7bdfc73afab3:0x5a2657cad9f3244e!8m2!3d44.8213114!4d20.4657723!9m1!1b1!16s%2Fg%2F11tww51m38"
                    target="_blank"  aria-current="page">
                    Find Us
                </a>
                <!-- <a href="https://www.google.com/maps/place/D'oliva+bar/@44.8207596,20.4640557,17z/data=!4m8!3m7!1s0x475a7bdfc73afab3:0x5a2657cad9f3244e!8m2!3d44.8213114!4d20.4657723!9m1!1b1!16s%2Fg%2F11tww51m38">
                    <img src="../images/locationicon.svg" class="h-7 w-7" alt="location-icon">
                </a> -->
            </li>
            <li class="block ml-2 md:mx-4 hover:text-wine">
                <a href="https://instagram.com/doliva_bar?igshid=YmMyMTA2M2Y=" target="_blank"  aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</header>



