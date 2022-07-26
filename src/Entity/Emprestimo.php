<?php
    namespace Vini\Credeasy\Entity;

    use DateTimeImmutable;
    use Vini\Credeasy\Entity\Cliente;

    /**
     * @Entity
     */
    class Emprestimo 
    {
        /**
        * @Id
        * @GeneratedValue
        * @Column(type="bigint", nullable=false)
        */
        private $idEmprestimo;

        /**
         * @Column(type="decimal", precision=10, scale=2, name="valor_emprestimo")
         */
        private $valorDoEmprestimo;

        /**
         * @Column(type="decimal", precision=10, scale=2, name="taxa_juros")
         */
        private $taxaDeJuros;

        /**
         * @Column(type="decimal", precision=10, scale=2, nullable=true, name="valor_pago")
         */
        private $valorFinalDoEmprestimo;

        /**
         * @Column(type="datetime", nullable=false, name="data_solicitacao")
         */
        private $dataSolicitacaoEmprestimo;

        /**
         * @Column(type="datetime", nullable=true, name="data_quitacao")
         */
        private $dataQuitacaoEmprestimo;

        /**
         * @Column(type="string", length=20, name="status_emprestimo")
         */
        private $statusDoEmprestimo = "SOLICITADO";

        /**
         * @ManyToOne(targetEntity="Cliente", fetch="EAGER")
         * @JoinColumn(name="cpf_cliente", referencedColumnName="cpf")
         */
        private Cliente $cliente;

        public function __construct(float $valorDoEmprestimo, 
                                    float $taxaDeJuros,
                                    DateTimeImmutable $dataSolicitacaoEmprestimo,
                                    Cliente $cliente)
        {
            $this->valorDoEmprestimo = $valorDoEmprestimo;
            $this->taxaDeJuros = $taxaDeJuros;
            $this->dataSolicitacaoEmprestimo = $dataSolicitacaoEmprestimo;
            $this->cliente = $cliente;
        }

        public function getCliente(): Cliente
        {
            return $this->cliente;
        }

        public function setCliente(Cliente $cliente): self
        {
            $this->cliente = $cliente;
            return $this;
        }  

        public function setIdEmprestimo(int $idEmprestimo): self 
        {
            $this->idEmprestimo = $idEmprestimo;
            return $this;
        }

        public function getIdEmprestimo(): int
        {
            return $this->idEmprestimo;
        }

        public function setValorDoEmprestimo(float $valorDoEmprestimo): self 
        {
            $this->valorDoEmprestimo = $valorDoEmprestimo;
            return $this;
        }

        public function getValorDoEmprestimo(): float
        {
            return $this->valorDoEmprestimo;
        }

        public function setTaxaDeJuros(float $taxaDeJuros): self
        {
            $this->taxaDeJuros = $taxaDeJuros;
            return $this;
        } 

        public function getTaxaDeJuros(): float
        {
            return $this->taxaDeJuros;
        }
        
        public function setValorFinalDoEmprestimo(float $valorFinalDoEmprestimo): self
        {
            $this->valorFinalDoEmprestimo = $valorFinalDoEmprestimo;
            return $this;
        } 

        public function getValorFinalDoEmprestimo(): float
        {
            return $this->valorFinalDoEmprestimo;
        }

        public function setDataSolicitacaoEmprestimo(DateTimeImmutable $dataSolicitacaoEmprestimo): self
        {
            $this->dataSolicitacaoEmprestimo = $dataSolicitacaoEmprestimo;
            return $this;
        } 

        public function getDataSolicitacaoEmprestimo(): DateTimeImmutable
        {
            return $this->dataSolicitacaoEmprestimo;
        }

        public function setDataQuitacaoEmprestimo(DateTimeImmutable $dataQuitacaoEmprestimo): self
        {
            $this->dataQuitacaoEmprestimo = $dataQuitacaoEmprestimo;
            return $this;
        } 

        public function getDataQuitacaoEmprestimo(): DateTimeImmutable
        {
            return $this->dataQuitacaoEmprestimo;
        }

        public function setStatusDoEmprestimo(string $statusDoEmprestimo): self
        {
            $this->statusDoEmprestimo = $statusDoEmprestimo;
            return $this;
        } 

        public function getStatusDoEmprestimo(): string
        {
            return $this->statusDoEmprestimo;
        }

    }    

?>    