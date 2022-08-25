<style>
    .sidebar {
        height: 100vh;
        background-color: #448cf7;
    }

    p {
        font-family: 'Poppins', sans-serif;
        letter-spacing: 1px;
    }

    li a {
        font-family: 'Poppins', sans-serif;
        letter-spacing: 1px;
        color: white;
    }

    ul:hover {
        color: rgb(131, 131, 131);
    }

    img {
        width: 100px;
    }

    .logout-button {
        outline: none;
        border: none;
        background-color: transparent;
        padding: 0 0 0 2px;
        color: white;
    }

    .logout-button:hover {
        color: rgb(131, 131, 131);
    }
</style>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse rounded-end">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <div class="d-flex justify-content-center pt-4 pb-3">
                <img src="/img/Logo-Dugam.png" alt="Dugam">
            </div>
            <p class="d-flex justify-content-center fs-4 text-white fw-bold">GAMVOTE</p>
            <li class="nav-item pt-3">
                <a href="/dashboard" class="d-flex justify-content-center text-decoration-none fs-6 fw-normal ul">List
                    Candidate</a>
            </li>
            <li class="nav-item pt-3">
                <form class="nav-link text-danger logout d-flex justify-content-center" action="/logout" method="POST"
                    style="cursor: pointer" id="myForm">
                    @method('POST')
                    @csrf
                    <button class="logout-button">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
