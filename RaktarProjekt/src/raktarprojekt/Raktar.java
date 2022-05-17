package raktarprojekt;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Iterator;
import java.util.List;

public class Raktar implements Iterable<Elelmiszer>, Serializable {

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

    public void kiir() {
        try (ObjectOutputStream objKi = new ObjectOutputStream(new FileOutputStream("raktar.bin"))) {
            objKi.writeObject(this);
        } catch (FileNotFoundException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }
    }

    public static Raktar beolvas(String fajlNev) {
        Raktar raktar = new Raktar();
        try (ObjectInputStream objBe = new ObjectInputStream(new FileInputStream(fajlNev))) {
            raktar = (Raktar) objBe.readObject();

            return raktar;
        } catch (FileNotFoundException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        } catch (ClassNotFoundException ex) {
            ex.printStackTrace();
        }
        return raktar;
    }

    @Override
    public Iterator<Elelmiszer> iterator() {
        return elelmiszerek.iterator();
    }
}
