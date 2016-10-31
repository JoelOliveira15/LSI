package Pojo;

import java.sql.Date;

public class Usuario {
	private Integer id;
	private String nome;
	private String email;
	private String usuario;
	private String senha;
	private Date data_nascimento;
	private String gereno;
	private Telefone telefone;
	private Permissao permissao;
	
	public Integer getId() {
		return id;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	public Permissao getPermissao() {
		return permissao;
	}
	public void setPermissao(Permissao permissao) {
		this.permissao = permissao;
	}
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public String getUsuario() {
		return usuario;
	}
	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}
	public String getSenha() {
		return senha;
	}
	public void setSenha(String senha) {
		this.senha = senha;
	}
	public Date getData_nascimento() {
		return data_nascimento;
	}
	public void setData_nascimento(Date data_nascimento) {
		this.data_nascimento = data_nascimento;
	}
	public String getGereno() {
		return gereno;
	}
	public void setGereno(String gereno) {
		this.gereno = gereno;
	}
	public Telefone getTelefone() {
		return telefone;
	}
	public void setTelefone(Telefone telefone) {
		this.telefone = telefone;
	}
	
	@Override
	public String toString(){
		return id + nome + email + usuario + senha + data_nascimento + gereno + telefone;
		
	}
	
}
