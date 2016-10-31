package Daos;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import Pojo.Transtornos;
import conexao.FactoryConexao;

public class TranstornosDAO implements Abstrata<Transtornos>{
	private final Connection connection;
	public TranstornosDAO (Connection connection){
		this.connection = connection;
	}

	public void casdastrar(Transtornos obj) throws SQLException {
		// TODO Auto-generated method stub
		
	}

	public void atualizar(Transtornos obj) {
		// TODO Auto-generated method stub
		
	}

	public void deletar(Transtornos transtorno) throws SQLException {
		FactoryConexao.getConnection();
		PreparedStatement ps = FactoryConexao.getConnection().prepareStatement("delete from transtorno where id = ?");
		ps.setString(1, transtorno.getNome());
		ps.executeUpdate();
		ps.close();

		
	}

	public void pesquisarId(Integer id) {
		// TODO Auto-generated method stub
		
	}

	public void listar() {
		// TODO Auto-generated method stub
		
	}

	public void deletar(Integer id) throws SQLException {
		// TODO Auto-generated method stub
		
	}

}
