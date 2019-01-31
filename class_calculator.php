<?php

class Calculator
{
    private $first_operand;
    private $second_operand;
    private $operator;

    /**
     * @param mixed $first_operand
     */
    public function setFirstOperand($first_operand)
    {
        $this->first_operand = $first_operand;
    }

    /**
     * @param mixed $second_operand
     */
    public function setSecondOperand($second_operand)
    {
        $this->second_operand = $second_operand;
    }

    /**
     * @param mixed $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return mixed
     */
    public function getFirstOperand()
    {
        return $this->first_operand;
    }

    /**
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @return mixed
     */
    public function getSecondOperand()
    {
        return $this->second_operand;
    }

    function calculate()
    {
        if ($this->operator === "add") {
            return $this->first_operand + $this->second_operand;
        } else if ($this->operator === "sub") {
            return $this->first_operand - $this->second_operand;
        } else if ($this->operator === "mul") {
            return $this->first_operand * $this->second_operand;
        } else if ($this->operator === "div") {
            if ($this->second_operand == 0) {
                throw new Exception("Loi nhap mau so bang 0");
            } else return $this->first_operand / $this->second_operand;
        }
    }

}
?>