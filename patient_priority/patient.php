<?php

class Patient
{
    public $name;
    public $code;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    public function __toString()
    {
        return "$this->name (Code: $this->code)";
    }
}

class PriorityQueue
{
    private $queue;

    public function __construct()
    {
        $this->queue = array();
    }

    public function enqueue($name, $code)
    {
        $patient = new Patient($name, $code);
        $priority = $code;
        $added = false;

        for ($i = 0; $i < count($this->queue); $i++) {
            if ($priority < $this->queue[$i]->code) {
                array_splice($this->queue, $i, 0, array($patient));
                $added = true;
                break;
            }
        }

        if (!$added) {
            array_push($this->queue, $patient);
        }
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        }

        return null;
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function __toString()
    {
        $result = '';
        for ($i = 0; $i < count($this->queue); $i++) {
            $result .= $this->queue[$i] . "\n";
        }
        return $result;
    }
}

// Tạo một hàng đợi ưu tiên
$queue = new PriorityQueue();

// Thêm các bệnh nhân vào hàng đợi
$queue->enqueue('Smith', 5);
$queue->enqueue('Jones', 4);
$queue->enqueue('Fehrenbach', 6);
$queue->enqueue('Brown', 1);
$queue->enqueue('Ingram', 1);

// Hiển thị danh sách bệnh nhân
echo "Danh sách bệnh nhân:\n";
echo $queue;

// Khám bệnh cho bệnh nhân ưu tiên cao nhất
echo "Khám bệnh cho: ";
echo $queue->dequeue()->name . "\n";

// Hiển thị danh sách bệnh nhân còn lại
echo "Danh sách bệnh nhân còn lại:\n";
echo $queue;

// Khám bệnh cho bệnh nhân ưu tiên cao nhất
echo "Khám bệnh cho: ";
echo $queue->dequeue()->name . "\n";

// Hiển thị danh sách bệnh nhân còn lại
echo "Danh sách bệnh nhân còn lại:\n";
echo $queue;

?>
