package conexao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class FactoryConexao {
	private static final String URL = "jdbc:postgresql://localhost:5432/projetoLSI";
	private static final String USUARIO = "postgres";
	private static final String SENHA = "posgres2014";
	//criando conexao
	public static Connection getConnection(){
		Connection connection = null;
		try{
			connection = DriverManager.getConnection(URL,USUARIO, SENHA);
		} catch (SQLException s){
			s.printStackTrace();
		}
		return connection;
		
	}
}


