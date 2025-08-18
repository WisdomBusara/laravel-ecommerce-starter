<?php
interface PaymentGatewayInterface { public function charge(array $p): array; }
