$(function () {
    const token = $('meta[name="csrf-token"]').attr("content");
    const ajax = new Ajax(token);
    const apivegpont = "http://localhost:8000/api";

    ajax.ajaxApiGet(apivegpont + "/kategoriak", (adat) => {
        let szulo = $("#kategoria");
        adat.forEach((elem) => {
            const valasztas = new Kategoria(szulo, elem);
        });
    });
    kerdesBeker();

    $("#kategoria").on("change", () => {
        kerdesBeker();
    });

    function kerdesBeker() {
        ajax.ajaxApiGet(apivegpont + "/tesztek/expand", (adat) => {
            let szulo = $(".kerdesek");
            szulo.empty();
            let kategoria = $("#kategoria").val();
            adat.forEach((elem) => {
                if (kategoria == elem.id) {
                    const kerdes = new TesztKerdes(szulo, elem);
                }
            });
        });
    }

    $(window).on("klikk", (event) => {
        console.log(event.detail);
    });
});

class Kategoria {
    constructor(szulo, adat) {
        this.szulo = szulo;
        this.adat = adat;
        this.elem =
            "<option value=" + adat.id + ">" + adat.kategorianev + "</option>";
        this.szulo.append(this.elem);
    }
}

class TesztKerdes {
    constructor(szulo, adat) {
        this.szulo = szulo;
        this.adat = adat;

        this.szulo.append(`<div class='teszt'>
        <div class='kerdes'></div>
        <div class='valaszok'>
        <div class='valasz v1'></div>
        <div class='valasz v2'></div>
        <div class='valasz v3'></div>
        <div class='valasz v4'></div>
        </div>
        </div>`);

        this.elem = this.szulo.find(".teszt:last");

        this.kerdes = this.elem.find(".kerdes").text(adat.kerdes);

        this.v1 = this.elem.find(".v1").text(adat.v1);
        this.v2 = this.elem.find(".v2").text(adat.v2);
        this.v3 = this.elem.find(".v3").text(adat.v3);
        this.v4 = this.elem.find(".v4").text(adat.v4);

        this.valasz = this.elem.find(".valasz");

        this.valasz.on("click", () => {
           
            
            this.klikkTrigger();
        });
    }

    klikkTrigger() {
        let esemeny = new CustomEvent("klikk", { detail: this });
        window.dispatchEvent(esemeny);
    }
}
