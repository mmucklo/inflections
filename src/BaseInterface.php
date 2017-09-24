<?php

namespace Inflections;

interface BaseInterface {
    public function getRules();

    public function getUninflected();

    public function getIrregular();
}