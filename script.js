const params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
});

let bg = params.kleur

switch (bg) {
    case "rood":
        document.body.style.backgroundColor = "red";
        break;
    case "groen":
        document.body.style.backgroundColor = "green";
        break;
    case "blauw":
        document.body.style.backgroundColor = "blue";
        break;
    case "geel":
        document.body.style.backgroundColor = "yellow";
         break;
    case "oranje":
        document.body.style.backgroundColor = "orange";
      break;
    case "paars":
        document.body.style.backgroundColor = "puple";
        break;

    }