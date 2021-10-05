<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
            <a href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( 'register.form' ) ): ?> class="active"<?php endif ?>>Registreren</a>
                <a href="<?php echo url( 'login.form' ) ?>"<?php if ( current_route_is( 'login.form' ) ): ?> class="active"<?php endif ?>>Login</a>
    </li>
</ul>