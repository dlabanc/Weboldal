package raktarprojekt;

import java.text.SimpleDateFormat;
import java.util.Date;

public class Elelmiszer {

    //SimpleDateFormat d = new SimpleDateFormat("YYYY-MM-DD");
    private String nev, gyarto;
    private int lejarat;

    public Elelmiszer(String nev, String gyarto) throws lejartElelmiszerException {

        this(nev, gyarto, 20220517);
    }

    public Elelmiszer(String nev, String gyarto, int lejarat) throws lejartElelmiszerException {
        this.nev = nev;
        this.gyarto = gyarto;
        this.lejarat = lejarat;

        if (lejarat < 20220517) {

            throw new lejartElelmiszerException();
        }
    }

    public class lejartElelmiszerException extends Exception {

        public lejartElelmiszerException() {
            System.out.println("lejárt élelmiszer!");
        }
    }

}
