package Daos;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import Pojo.Sintomas;
import Pojo.Transtornos;
import conexao.FactoryConexao;

public class SintomasDAO implements Abstrata<Sintomas> {
	private final Connection connection;
	public SintomasDAO (Connection connection){
		this.connection = connection;
	}
	/*
	 * 	private final Connection connection;
	public UsuarioDAO(Connection connection){
		this.connection = connection;
	 */

	public void casdastrar(Sintomas obj) throws SQLException {
		// TODO Auto-generated method stub
		
	}

	public void atualizar(Sintomas obj) {
		// TODO Auto-generated method stub
		
	}

	public void deletar(Sintomas sintomas) throws SQLException {
		FactoryConexao.getConnection();
		PreparedStatement ps = FactoryConexao.getConnection().prepareStatement("delete from sintoma where id = ?");
		ps.setString(1, sintomas.getNome());
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
