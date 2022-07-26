<?php
    namespace Vini\Credeasy\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\Common\Collections\Collection;

    /**
     * @Entity 
     */
    class Cliente
    {
        /**
         * @Id
         * @Column(type="string", length=14, unique=true, nullable=false)
         */
        private string $cpf;

        /**
         * @Column(type="string", length=255)
         */
        private string $nome;

        /**
         * @Column(type="decimal", precision=10, scale=2)
         */
        private float $renda;

        /**
         * @Column(type="string", length=255)
         */
        private string $endereco;

        /**
         * @Column(type="string", length=255)
         */
        private string $profissao;

        /**
         * @Column(type="string", length=14, name="telefone")
         */
        private string $numeroDeTelefone;

        /**
         * @Column(type="string", length=255)
         */
        private string $email;

        /**
         * @Column(type="string", length=255)
         */
        private string $senha;
        
        /**
         * @Column(type="string", length=10, name="tipo_usuario")
         */
        private string $tipoDeUsuario = "CLIENTE";

        /**
         * @OneToMany(targetEntity="Emprestimo", mappedBy="cliente")
         */
        private $emprestimos;


        public function __construct(string $cpf, 
                                    string $nome, 
                                    float $renda, 
                                    string $endereco,
                                    string $profissao,
                                    string $numeroDeTelefone,
                                    string $email,
                                    string $senha)
        {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->renda = $renda;
            $this->endereco = $endereco;
            $this->profissao = $profissao;
            $this->numeroDeTelefone = $numeroDeTelefone;
            $this->email = $email;
            $this->senha = $senha;

            $this->emprestimos = new ArrayCollection();
        }

        public function addEmprestimo(Emprestimo $emprestimo)
        {
            $this->emprestimos->add($emprestimo);
            $emprestimo->setCliente($this);

            return $this;
        }

        public function getEmprestimos(): Collection
        {
            return $this->emprestimos;
        }

        public function setCpf(string $cpf): self 
        {
            $this->cpf = $cpf;
            return $this;
        }

        public function getCpf(): string
        {
            return $this->cpf;
        }

        public function setNome(string $nome): self 
        {
            $this->nome = $nome;
            return $this;
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function setRenda(float $renda): self
        {
            $this->renda = $renda;
            return $this;
        } 

        public function getRenda(): float
        {
            return $this->renda;
        }

        public function setEndereco(string $endereco): self
        {
            $this->endereco = $endereco;
            return $this;
        } 

        public function getEndereco():string
        {
            return $this->endereco;
        }

        public function setProfissao(string $profissao): self
        {
            $this->profissao = $profissao;
            return $this;
        } 

        public function getProfissao():string
        {
            return $this->profissao;
        }

        public function setNumeroDeTelefone($numeroDeTelefone): self
        {
            $this->numeroTelefone = $numeroDeTelefone;
            return $this;
        } 

        public function getNumeroDeTelefone(): string
        {
            return $this->numeroDeTelefone;
        }

        public function setEmail(string $email): self
        {
            $this->email = $email;
            return $this;
        } 

        public function getEmail(): string
        {
            return $this->email;
        }

        public function setSenha(string $senha): self
        {
            $this->senha = $senha;
            return $this;
        } 

        public function getSenha(): string
        {
            return $this->senha;
        }

        public function setTipoDeUsuario(string $tipoDeUsuario): self
        {
            $this->tipoDeUsuario = $tipoDeUsuario;
            return $this;
        } 

        public function getTipoDeUsuario(): string
        {
            return $this->tipoDeUsuario;
        }

        public function senhaEstaCorreta(string $senhaPura): bool
        {
            return password_verify($senhaPura, $this->senha);
        }
    }    
?>    