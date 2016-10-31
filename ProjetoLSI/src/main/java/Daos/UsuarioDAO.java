package Daos;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Date;

import Pojo.Usuario;
import conexao.FactoryConexao;
public class UsuarioDAO implements Abstrata<Usuario>{
	private final Connection connection;
	public UsuarioDAO(Connection connection){
		this.connection = connection;
	}

	public void casdastrar(Usuario obj) throws SQLException {
		try{
			PreparedStatement ps;
			ps = connection.prepareStatement("insert into tabela_usuario(id_usuario, nome, email, usuario, senha, data_nascimento, telefone, permissao) values (?,?,?,?,?,?,?,?)", Statement.RETURN_GENERATED_KEYS);
			ps.setInt(1, obj.getId());
			ps.setString(2, obj.getNome());
			ps.setString(3, obj.getEmail());
			ps.setString(4, obj.getUsuario());
			ps.setString(5, obj.getSenha());
			ps.setDate (6, obj.getData_nascimento());
			// telefone e permissão são do tipo Tefelone e Permissão
			//ps.setString(7, obj.getTelefone());
			//ps.setString(8, obj.getPermissao());
			ps.execute();
			ResultSet keys = ps.getGeneratedKeys();
			keys.next();
			int id = keys.getInt("id_usuario");
			obj.setId(id);
			connection.close();
			ps.close();
			keys.close();			
	}catch(Exception e){
		e.printStackTrace();
		throw new SQLException();
	}
		
	}

	public void atualizar(Usuario obj) {
		// TODO Auto-generated method stub
		
	}

	public void deletar(Usuario usuario) throws SQLException { 
		FactoryConexao.getConnection();
		PreparedStatement ps = FactoryConexao.getConnection().prepareStatement("delete from usuario where id = ?"); 
		ps.setInt(1, usuario.getId());
		ps.executeUpdate();
		ps.close();
	}

	public void pesquisarId(Integer id) {
		Usuario usuario;
		try{
			PreparedStatement ps = connection.prepareStatement("select id_usuario, nome, email, usuario, senha, data_nascimento, telefone, permissao from tabela_usuario where id_usuario = ?");
			ps.setInt(1, id);
			ResultSet rs = ps.executeQuery();
			
			if (rs.next()){
				usuario = new Usuario();
				usuario.setId(id);
				usuario.setNome(rs.getString("nome"));
				usuario.setEmail(rs.getString("email"));
				usuario.setUsuario(rs.getString("usuario"));
				usuario.setSenha(rs.getString("senha"));
				usuario.setData_nascimento(rs.getDate("data_nascimento"));
		
				connection.close();
				ps.close();
				rs.close();
			}else{
				throw new Exception(); 
			}
		} catch (Exception e){
			System.out.println(e.getMessage());
		}
		
	}

	public void listar() throws SQLException {
		FactoryConexao.getConnection();
		Statement ps = FactoryConexao.getConnection().createStatement();
		ps.execute("select * from usuarios");
		ResultSet rst = ps.getResultSet();
		while (rst.next()){
			int id = rst.getInt("id");
			String nome = rst.getString("nome");
			String email = rst.getString("email");
			String usuario = rst.getString("usuario");
			String senha = rst.getString("senha");
			Date data = rst.getDate("data");
			String genero = rst.getString("genero");
			String telefone = rst.getString("telefone");
			String permissao = rst.getString("permissao");
		
		}
		FactoryConexao.getConnection().close();	
		
	}

	public void deletar(Integer id) {
		// TODO Auto-generated method stub
		
	}
	

}
