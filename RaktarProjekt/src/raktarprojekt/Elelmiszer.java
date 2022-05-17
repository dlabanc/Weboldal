package raktarprojekt;

import java.text.Collator;
import java.util.Comparator;

public abstract class Elelmiszer implements Comparator<Elelmiszer> {

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

    public String getNev() {
        return nev;
    }

    public String getGyarto() {
        return gyarto;
    }

    public int getLejarat() {
        return lejarat;
    }

    @Override
    public int compare(Elelmiszer egyik, Elelmiszer masik) {
        Collator col = Collator.getInstance();
        return col.compare(egyik.getNev(), masik.getNev());
    }

    public class lejartElelmiszerException extends Exception {

        public lejartElelmiszerException() {
            System.out.println("lejárt élelmiszer!");
        }
    }

    public class GyartoComparator implements Comparator<Elelmiszer> {

        @Override
        public int compare(Elelmiszer egyik, Elelmiszer masik) {
            Collator col = Collator.getInstance();
            return col.compare(egyik.getGyarto(), masik.getGyarto());
        }
    }

    public GyartoComparator GyartoRendezo() {
        return new GyartoComparator();
    }

}
