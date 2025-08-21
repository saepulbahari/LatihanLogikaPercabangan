<?php

class Customer
{
    public function __construct(
        public string $name,
        public string $address,
        private int $nik
    ) {
    }

    public function getNik(): int
    {
        return $this->nik;
    }

    public function __get($name)
    {
        if ($name === 'nik') {
            return "**********";
        }
    }

    public function __set($name, $value)
    {
        if ($name === 'nik') {
            if (strlen((string)$value) < 15) {
                throw new Exception("NIK harus lebih dari 15 digit");
            }
            $this->nik = $value;
        } elseif ($name === 'name') {
            $this->name = $value;
        } elseif ($name === 'address') {
            $this->address = $value;
        }
    }

    public function setNIK(int $newNIK): void
    {
        if (strlen((string)$newNIK) < 15) {
            throw new Exception("NIK harus lebih dari 15 Digit");
        }

        $this->nik = $newNIK;
    }
}


$customer = new Customer("Budi", "Bandung", 123456789012345);

echo "NIK Asli : " . $customer->getNik() . "\n";
echo "NIK (disensor): " . $customer->nik . "\n";


$customer->setNIK(987654321098765);
echo "NIK Baru : " . $customer->getNik() . "\n";


$customer->nik = 111111111111111;
echo "NIK Baru (__set): " . $customer->getNik() . "\n";


$customer->name = "Andi";
$customer->address = "Bandung";
echo "Nama : " . $customer->name . "\n";
echo "Alamat : " . $customer->address . "\n";
