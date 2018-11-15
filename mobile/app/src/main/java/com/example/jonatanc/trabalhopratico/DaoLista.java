import java.util.LinkedList;
import java.util.List;

public class DaoLista {
    private static List lista;
    private DaoLista(){}
    public static void salvar(Pessoa p){
        if(lista==null)
            lista = new LinkedList();
        lista.add(p);
    }
    public static List listar(){
        return lista;
    }
}
