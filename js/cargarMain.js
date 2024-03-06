$(document).ready(function() {
    var urlParams = new URLSearchParams(window.location.search);
    var marca = urlParams.get('marca');

    var archivos = {
        'aprilia': {
            'html': '/html/gama/gama_aprilia.html',
            'css': '/css/gama.css'
        },
        'ducati': {
            'html': '/html/gama/gama_ducati.html',
            'css': '/css/gama.css'
        },
        'motoguzzi': {
            'html': '/html/gama/gama_motoguzzi.html',
            'css': '/css/gama.css'
        },
        'mvagusta': {
            'html': '/html/gama/gama_mvagusta.html',
            'css': '/css/gama.css'
        },
        'empresa': {
            'html': '/html/nosotros/empresa.html',
            'css': '/css/nosotros1.css'
        },
        'servicios': {
            'html': '/html/nosotros/servicios.html',
            'css': '/css/nosotros1.css'
        },
        'contacto': {
            'html': '/html/nosotros/contacto.html',
            'css': '../css/form.css'
        },
        'taller': {
            'html': '/html/nosotros/taller.html',
            'css': '../css/formularios.css'
        },
        'login': {
            'html': '/html/perfil/login.html',
            'css': '../css/acceder.css'
        },
        'registro': {
            'html': '/html/perfil/registro.html',
            'css': '../css/acceder.css'
        },
        'perfil': {
            'html': '/html/perfil/perfil.html',
            'css': '../css/perfil.css'
        },
        'modelo': {
            'html': '/html/modelo.html'
        },
        'index': {
            'html': '/index.html'
        },
        'a1': {
            'html': '/html/modelos/aprilia/a1.html',
            'css': '/css/modelo.css'
        },
        'a2': {
            'html': '/html/modelos/aprilia/a2.html',
            'css': '/css/modelo.css'
        },
        'a3': {
            'html': '/html/modelos/aprilia/a3.html',
            'css': '/css/modelo.css'
        },
        'a4': {
            'html': '/html/modelos/aprilia/a4.html',
            'css': '/css/modelo.css'
        },
        'a5': {
            'html': '/html/modelos/aprilia/a5.html',
            'css': '/css/modelo.css'
        },
        'd1': {
            'html': '/html/modelos/ducati/d1.html',
            'css': '/css/modelo.css'
        },
        'd2': {
            'html': '/html/modelos/ducati/d2.html',
            'css': '/css/modelo.css'
        },
        'd3': {
            'html': '/html/modelos/ducati/d3.html',
            'css': '/css/modelo.css'
        },
        'd4': {
            'html': '/html/modelos/ducati/d4.html',
            'css': '/css/modelo.css'
        },
        'd5': {
            'html': '/html/modelos/ducati/d5.html',
            'css': '/css/modelo.css'
        },
        'm1': {
            'html': '/html/modelos/motoguzzi/m1.html',
            'css': '/css/modelo.css'
        },
        'm2': {
            'html': '/html/modelos/motoguzzi/m2.html',
            'css': '/css/modelo.css'
        },
        'm3': {
            'html': '/html/modelos/motoguzzi/m3.html',
            'css': '/css/modelo.css'
        },
        'm4': {
            'html': '/html/modelos/motoguzzi/m4.html',
            'css': '/css/modelo.css'
        },
        'm5': {
            'html': '/html/modelos/motoguzzi/m5.html',
            'css': '/css/modelo.css'
        },
        'ag1': {
            'html': '/html/modelos/mvagusta/mv1.html',
            'css': '/css/modelo.css'
        },
        'ag2': {
            'html': '/html/modelos/mvagusta/mv2.html',
            'css': '/css/modelo.css'
        },
        'ag3': {
            'html': '/html/modelos/mvagusta/mv3.html',
            'css': '/css/modelo.css'
        },
        'ag4': {
            'html': '/html/modelos/mvagusta/mv4.html',
            'css': '/css/modelo.css'
        },
        'ag5': {
            'html': '/html/modelos/mvagusta/mv5.html',
            'css': '/css/modelo.css'
        }
    };

    if (archivos.hasOwnProperty(marca)) {
        var archivoHTML = archivos[marca].html;
        var archivoCSS = archivos[marca].css || '';

        $.ajax({
            url: archivoHTML,
            dataType: 'html',
            success: function(data) {
                $('#main-content').html(data);

                if (archivoCSS !== '') {
                    $('<link>').appendTo('head').attr({
                        type: 'text/css',
                        rel: 'stylesheet',
                        href: archivoCSS
                    });
                }
            },
            error: function(xhr, status, error) {
                $('#main-content').html('<p>Error al cargar el contenido: ' + error + '</p>');
            }
        });
    } else {
        $('#main-content').html('<p>Marca no válida.</p>');
    }
});

