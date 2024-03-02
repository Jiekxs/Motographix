function opa($nom) {
  document.body.classList.add("transparent");

  const marcaURLs = {
    aprilia: "../layouts/home_layout.html?marca=aprilia",
    ducati: "../layouts/home_layout.html?marca=ducati",
    motoguzzi: "../layouts/home_layout.html?marca=motoguzzi",
    mvagusta: "../layouts/home_layout.html?marca=mvagusta",
    empresa: "../layouts/home_layout.html?marca=empresa",
    servicios: "../layouts/home_layout.html?marca=servicios",
    contacto: "../layouts/home_layout.html?marca=contacto",
    taller: "../layouts/home_layout.html?marca=taller",
    login: "../layouts/home_layout.html?marca=login",
    registro: "../layouts/home_layout.html?marca=registro",
    perfil: "../layouts/home_layout.html?marca=perfil",
    index: "/index.php",
    a1: "../layouts/home_layout.html?marca=a1",
    a2: "../layouts/home_layout.html?marca=a2",
    a3: "../layouts/home_layout.html?marca=a3",
    a4: "../layouts/home_layout.html?marca=a4",
    a5: "../layouts/home_layout.html?marca=a5",
    d1: "../layouts/home_layout.html?marca=d1",
    d2: "../layouts/home_layout.html?marca=d2",
    d3: "../layouts/home_layout.html?marca=d3",
    d4: "../layouts/home_layout.html?marca=d4",
    d5: "../layouts/home_layout.html?marca=d5",
    m1: "../layouts/home_layout.html?marca=m1",
    m2: "../layouts/home_layout.html?marca=m2",
    m3: "../layouts/home_layout.html?marca=m3",
    m4: "../layouts/home_layout.html?marca=m4",
    m5: "../layouts/home_layout.html?marca=m5",
    ag1: "../layouts/home_layout.html?marca=ag1",
    ag2: "../layouts/home_layout.html?marca=ag2",
    ag3: "../layouts/home_layout.html?marca=ag3",
    ag4: "../layouts/home_layout.html?marca=ag4",
    ag5: "../layouts/home_layout.html?marca=ag5",
    map: "https://maps.app.goo.gl/LBbhwVh6wmHziQgj6"
  };

  setTimeout(function () {
    const url = marcaURLs[$nom];
    if (url) {
      window.location.href = url;
    }
  }, 0);
}
