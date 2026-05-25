<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <header class="mt-3">
        <h2>Blog MalasNgoding</h2>

        <nav>
            <a href="/blog">HOME</a> |
            <a href="/blog/tentang">TENTANG</a> |
            <a href="/blog/kontak">KONTAK</a>
        </nav>

        <hr>
    </header>

    <!-- ISI HALAMAN -->
    @yield('konten')

    <hr>

    <footer>
        <p>© www.malasngoding.com</p>
    </footer>

</div>

</body>
</html>
