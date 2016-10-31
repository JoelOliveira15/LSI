package Daos;

import java.sql.SQLException;

public interface Abstrata<A> {
	void casdastrar (A obj) throws SQLException;
	void atualizar (A obj) throws SQLException;
	void deletar (Integer id) throws SQLException;
	void pesquisarId (Integer id) throws SQLException;
	void listar() throws SQLException;
}
