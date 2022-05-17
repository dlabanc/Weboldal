package raktarprojekt;

import java.io.File;

public class Konzerv extends Elelmiszer {

    private String leiras, receptAjanlas;

    public Konzerv(String leiras, String receptAjanlas, String nev, String gyarto) throws lejartElelmiszerException {
        super(nev, gyarto);
        this.leiras = leiras;
        this.receptAjanlas = receptAjanlas;
        receptMutat(receptAjanlas);
    }

    public Konzerv(String leiras, String nev, String gyarto) throws lejartElelmiszerException {
        super(nev, gyarto);
        this.leiras = leiras;
    }

    public boolean receptMutat(String receptAjanlas) {
        File f = new File(receptAjanlas);
        if (f.exists()) {
            return true;
        } else {
            return false;
        }

    }

}
