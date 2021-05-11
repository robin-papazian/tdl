                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                <?= $_SESSION['login'] ?>
                            </a>
                            <div class="navbar-dropdown" id="menu-drop">
                                <div class="navbar-item buttons">
                                    <a class="button is-primary" id='profil'>
                                      <strong>Profil</strong>
                                    </a>
                                </div>
                                <hr class="navbar-divider">
                                <div class="navbar-item buttons">
                                    <a href='?d' class="button is-primary">
                                        <strong>Deconnexion</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>