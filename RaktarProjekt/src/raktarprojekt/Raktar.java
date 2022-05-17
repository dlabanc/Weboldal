package raktarprojekt;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Iterator;
import java.util.List;

public class Raktar implements Iterable<Elelmiszer> {

    private ArrayList<Elelmiszer> elelmiszerek;

    public Raktar() {

        this.elelmiszerek = new ArrayList<>();
    }

    public void felvesz(Elelmiszer e) {
        elelmiszerek.add(e);
    }

    public List<Elelmiszer> getAutokNemModosithatoLista() {
        return Collections.unmodifiableList(elelmiszerek);
    }

    @Override
    public Iterator<Elelmiszer> iterator() {
        return elelmiszerek.iterator();
    }
}
