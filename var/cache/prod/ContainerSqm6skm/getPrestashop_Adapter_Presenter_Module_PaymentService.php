<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.presenter.module.payment' shared service.

return $this->services['prestashop.adapter.presenter.module.payment'] = new \PrestaShop\PrestaShop\Adapter\Presenter\Module\PaymentModulesPresenter(${($_ = isset($this->services['prestashop.adapter.presenter.module']) ? $this->services['prestashop.adapter.presenter.module'] : $this->load('getPrestashop_Adapter_Presenter_ModuleService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.module.payment_module_provider']) ? $this->services['prestashop.adapter.module.payment_module_provider'] : $this->load('getPrestashop_Adapter_Module_PaymentModuleProviderService.php')) && false ?: '_'});
