<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Cap & Knit | Gorras y Gorros de Lana Premium</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="bg-light">

<header class="bg-white border-bottom sticky-top py-3 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ url('/') }}" class="text-dark text-decoration-none fw-bold fs-4">
            <span class="logo-text">CAP & KNIT</span>
            <span class="visually-hidden"> - Volver a inicio</span>
        </a>

        <button id="contrast-toggle"
                class="btn btn-sm btn-outline-dark"
                aria-pressed="false"
                aria-label="Activar modo de alto contraste">
            👁 <span class="contrast-text">Alto contraste</span>
        </button>

        <nav aria-label="Navegación principal">
            <ul class="d-flex gap-4 list-unstyled text-uppercase small mb-0">
                <li>
                    <a href="{{ route('productos.index') }}"
                       class="text-dark text-decoration-none"
                       aria-current="page">
                        Productos
                    </a>
                </li>
                <li>
                    <a href="#" class="text-dark text-decoration-none">Formulario</a>
                </li>
                <li>
                    <a href="#" class="text-dark text-decoration-none">Iniciar sesión</a>
                </li>
                <li>
                    <a href="#" class="text-dark text-decoration-none">
                        Cesta (<span aria-live="polite">0</span>)
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main id="main-content" tabindex="-1">
    <section class="container py-5 my-5" aria-labelledby="productos-titulo">
        <h1 id="productos-titulo"
            class="display-4 text-center text-uppercase fw-light border-bottom pb-4 mb-5">
            Gorras y Gorros de Lana
        </h1>

        @if ($productos->count())
            <div class="row g-4 justify-content-center"
                 role="list"
                 aria-label="Lista de productos disponibles">

                @foreach ($productos as $producto)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3" role="listitem">
                        <article class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <h2 class="h5 text-uppercase fw-normal">
                                    {{ $producto->nombre }}
                                </h2>

                                <p class="text-muted small flex-grow-1">
                                    {{ $producto->descripcion }}
                                </p>

                                <p class="fw-bold fs-5 mb-0">
                                    ${{ number_format($producto->precio, 2) }}
                                </p>
                            </div>
                        </article>
                    </div>
                @endforeach

            </div>
        @else
            <div class="text-center py-5" role="alert" aria-live="polite">
                <p class="fs-4">No hay productos disponibles en este momento.</p>
            </div>
        @endif
    </section>
</main>

<footer class="bg-white border-top py-5" role="contentinfo">
    <div class="container text-center text-md-start">
        <p class="mb-0">&copy; {{ date('Y') }} Cap & Knit. Todos los derechos reservados.</p>
        <p class="small text-muted mt-2">
            Sitio web diseñado con criterios de accesibilidad WCAG 2.2 AA.
            <a href="#main-content" class="text-decoration-none">Volver arriba ↑</a>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/accessibility.js') }}"></script>

</body>
</html>
