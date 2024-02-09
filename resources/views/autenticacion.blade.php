<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Login Form</title>
    <link rel="icon" type="image/x-icon" href="/form-icon.png" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<button id="btnSwitch" class="btn btn-primary">Dark/Light Mode</button>
<div class="form-login">
    <div class="text-center">
        <h1>👋</h1>
        <h2>Bienvenid@</h2>

    </div>
    <form class="mt-5" action="#">
        <div class="mb-4 col-lg-4 mx-auto">
            <label for="emailAddress" class="form-label fw-semibold"
            >Email:</label
            >
            <input
                type="email"
                class="form-control"
                id="emailAddress"
                aria-describedby="emailHelp"
                placeholder="Your email address"
            />

        </div>

        <div class="mb-4 col-lg-4 mx-auto">
            <label for="password" class="form-label fw-semibold">Password:</label>
            <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Your password"
            />
        </div>
        <div class="col-lg-4 mx-auto form-check">
            <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="loggedIn"
                checked
            />

        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="d-grid col-lg-4 mx-auto">
            <button type="button" class="btn btn-primary btn-lg">Sign In</button>
        </div>
        </form>
    </form>
    <p class="form-text text-center my-4">OR</p>
    <div class="col-lg-4 mx-auto row justify-content-between">
        <button type="button" class="btn btn-light border col-5">
            <i class="bi bi-github"></i>
            Github
        </button>
        <button type="button" class="btn btn-light border col-5">
            <i class="bi bi-google"></i>
            Google
        </button>
    </div>

</div>

<script>
    document.getElementById("btnSwitch").addEventListener("click", () => {
        if (document.documentElement.getAttribute("data-bs-theme") === "dark") {
            document.documentElement.setAttribute("data-bs-theme", "light");
        } else {
            document.documentElement.setAttribute("data-bs-theme", "dark");
        }
    });
</script>
</body>
</html>
