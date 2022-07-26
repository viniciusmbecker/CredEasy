<?php
    namespace Vini\Credeasy\Entity;

    use DateTimeImmutable;

    /**
     * @Entity
     */
    class Parcela 
    {
        /**
         * @Id
         * @GeneratedValue
         * @Column(type="integer")
         */
        private int $idParcela;

        /**
         * @Column(type="decimal", precision=10, scale=2, name="valor_parcela")
         */
        private float $valorDaParcela;

        /**
         * @Column(type="integer", name="numero_parcela")
         */
        private int $numeroDaParcela;

        /**
         * @Column(type="datetime", name="data_vencimento")
         */
        private $dataVencimentoParcela;

        /**
         * @Column(type="datetime", name="data_pagamento")
         */
        private $dataPagamentoParcela;

        /**
         * @Column(type="decimal", precision=10, scale=2)
         */
        private float $multa;

        /**
         * @Column(type="decimal", precision=10, scale=2, name="valor_pago")
         */
        private float $valorParcelaPago;

        /**
         * @Column(type="string", name="status")
         */
        private string $statusDaParcela;

        /**
         * @ManyToOne(targetEntity="Emprestimo")
         * @JoinColumn(name="emprestimo_id", referencedColumnName="idEmprestimo")
         */
        private Emprestimo $emprestimo;

        public function __construct(float $valorDaParcela, 
                                    int $numeroDaParcela, 
                                    DateTimeImmutable $dataVencimentoParcela,
                                    Emprestimo $emprestimo)
        {
            $this->valorDaParcela = $valorDaParcela;
            $this->numeroDaParcela = $numeroDaParcela;
            $this->dataVencimentoParcela = $dataVencimentoParcela;
            $this->emprestimo = $emprestimo;
            $this->statusDaParcela = 'ABERTA';
        }

        
        public function getIdParcela(): int
        {
            return $this->idParcela;
        }

        public function getValorDaParcela(): float
        {
            return $this->valorDaParcela;
        }

        public function setValorDaParcela(float $valorDaParcela): self
        {
            $this->valor = $valorDaParcela;
            return $this;
        }
        
        public function getNumeroDaParcela(): int
        {
            return $this->numeroDaParcela;
        }

        public function getDataVencimentoParcela(): DateTimeImmutable
        {
            return $this->dataVencimentoParcela;
        }

        public function setDataVencimentoParcela(DateTimeImmutable $dataVencimentoParcela): self
        {
            $this->dataVencimentoParcela = $dataVencimentoParcela;
            return $this;
        }

        public function getDataPagamentoParcela(): DateTimeImmutable
        {
            return $this->dataPagamentoParcela;
        }

        public function setDataPagamentoParcela(DateTimeImmutable $dataPagamentoParcela): self
        {
            $this->dataPagamentoParcela = $dataPagamentoParcela;
            return $this;
        }

        public function getMulta(): float
        {
            return $this->multa;
        }

        public function setMulta(float $multa): self
        {
            $this->multa = $multa;
            return $this;
        }

        public function getValorParcelaPago(): float
        {
            return $this->valorParcelaPago;
        }

        public function setValorPago(float $valorParcelaPago): self
        {
            $this->valorParcelaPago = $valorParcelaPago;
            return $this;
        }

        public function getStatusParcela(): string
        {
            return $this->statusDaParcela;
        }

        public function setStatus(string $statusDaParcela): self
        {
            $this->statusDaParcela = $statusDaParcela;
            return $this;
        }

        public function getEmprestimo(): Emprestimo
        {
            return $this->emprestimo;
        }

        public function setEmprestimo(Emprestimo $emprestimo): self
        {
            $this->emprestimo = $emprestimo;
            return $this;
        }

    }