
<?php
	class Menu{
		
	public static function navbarsideleft(){
		return [
		[
			'path' => 'home',
			'label' => "Home", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'agtconfigs',
			'label' => "Agt Configs", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'aicreditledger',
			'label' => "Ai Credit Ledger", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'chatmessages',
			'label' => "Chat Messages", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'clients',
			'label' => "Clients", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'companies',
			'label' => "Companies", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'conversations',
			'label' => "Conversations", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'invoiceitems',
			'label' => "Invoice Items", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'invoices',
			'label' => "Invoices", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'licenses',
			'label' => "Licenses", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'payments',
			'label' => "Payments", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'products',
			'label' => "Products", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'supporttickets',
			'label' => "Support Tickets", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'users',
			'label' => "Users", 
			'icon' => '<i class="material-icons">extension</i>'
		]
	] ;
	}
	
		
	public static function environment(){
		return [
		[
			'value' => 'production', 
			'label' => "production", 
		],
		[
			'value' => 'test', 
			'label' => "test", 
		],
		[
			'value' => 'learning', 
			'label' => "learning", 
		],] ;
	}
	
	public static function type(){
		return [
		[
			'value' => 'purchase', 
			'label' => "purchase", 
		],
		[
			'value' => 'bonus', 
			'label' => "bonus", 
		],
		[
			'value' => 'usage', 
			'label' => "usage", 
		],
		[
			'value' => 'refund', 
			'label' => "refund", 
		],] ;
	}
	
	public static function senderType(){
		return [
		[
			'value' => 'user', 
			'label' => "user", 
		],
		[
			'value' => 'ai', 
			'label' => "ai", 
		],
		[
			'value' => 'agent', 
			'label' => "agent", 
		],
		[
			'value' => 'system', 
			'label' => "system", 
		],] ;
	}
	
	public static function status(){
		return [
		[
			'value' => 'active', 
			'label' => "active", 
		],
		[
			'value' => 'inactive', 
			'label' => "inactive", 
		],] ;
	}
	
	public static function taxRegime(){
		return [
		[
			'value' => 'micro', 
			'label' => "micro", 
		],
		[
			'value' => 'simplified', 
			'label' => "simplified", 
		],
		[
			'value' => 'general', 
			'label' => "general", 
		],] ;
	}
	
	public static function status2(){
		return [
		[
			'value' => 'active', 
			'label' => "active", 
		],
		[
			'value' => 'suspended', 
			'label' => "suspended", 
		],
		[
			'value' => 'pending', 
			'label' => "pending", 
		],] ;
	}
	
	public static function subscriptionStatus(){
		return [
		[
			'value' => 'active', 
			'label' => "active", 
		],
		[
			'value' => 'expired', 
			'label' => "expired", 
		],
		[
			'value' => 'cancelled', 
			'label' => "cancelled", 
		],] ;
	}
	
	public static function status2(){
		return [
		[
			'value' => 'active', 
			'label' => "active", 
		],
		[
			'value' => 'waiting', 
			'label' => "waiting", 
		],
		[
			'value' => 'escalated', 
			'label' => "escalated", 
		],
		[
			'value' => 'closed', 
			'label' => "closed", 
		],] ;
	}
	
	public static function priority(){
		return [
		[
			'value' => 'low', 
			'label' => "low", 
		],
		[
			'value' => 'medium', 
			'label' => "medium", 
		],
		[
			'value' => 'high', 
			'label' => "high", 
		],
		[
			'value' => 'urgent', 
			'label' => "urgent", 
		],] ;
	}
	
	public static function type2(){
		return [
		[
			'value' => 'FT', 
			'label' => "FT", 
		],
		[
			'value' => 'FR', 
			'label' => "FR", 
		],
		[
			'value' => 'FS', 
			'label' => "FS", 
		],
		[
			'value' => 'NC', 
			'label' => "NC", 
		],
		[
			'value' => 'ND', 
			'label' => "ND", 
		],] ;
	}
	
	public static function status2(){
		return [
		[
			'value' => 'draft', 
			'label' => "draft", 
		],
		[
			'value' => 'issued', 
			'label' => "issued", 
		],
		[
			'value' => 'paid', 
			'label' => "paid", 
		],
		[
			'value' => 'cancelled', 
			'label' => "cancelled", 
		],
		[
			'value' => 'expired', 
			'label' => "expired", 
		],] ;
	}
	
	public static function licenseType(){
		return [
		[
			'value' => 'learning', 
			'label' => "learning", 
		],
		[
			'value' => 'commercial', 
			'label' => "commercial", 
		],
		[
			'value' => 'agt_licensed', 
			'label' => "agt_licensed", 
		],] ;
	}
	
	public static function status2(){
		return [
		[
			'value' => 'pending', 
			'label' => "pending", 
		],
		[
			'value' => 'approved', 
			'label' => "approved", 
		],
		[
			'value' => 'rejected', 
			'label' => "rejected", 
		],
		[
			'value' => 'expired', 
			'label' => "expired", 
		],
		[
			'value' => 'suspended', 
			'label' => "suspended", 
		],] ;
	}
	
	public static function paymentMethod(){
		return [
		[
			'value' => 'multicaixa', 
			'label' => "multicaixa", 
		],
		[
			'value' => 'transfer', 
			'label' => "transfer", 
		],
		[
			'value' => 'cash', 
			'label' => "cash", 
		],
		[
			'value' => 'pos', 
			'label' => "pos", 
		],
		[
			'value' => 'other', 
			'label' => "other", 
		],] ;
	}
	
	public static function status2(){
		return [
		[
			'value' => 'pending', 
			'label' => "pending", 
		],
		[
			'value' => 'processing', 
			'label' => "processing", 
		],
		[
			'value' => 'verified', 
			'label' => "verified", 
		],
		[
			'value' => 'rejected', 
			'label' => "rejected", 
		],
		[
			'value' => 'duplicate', 
			'label' => "duplicate", 
		],] ;
	}
	
	public static function verifiedBy(){
		return [
		[
			'value' => 'ai', 
			'label' => "ai", 
		],
		[
			'value' => 'human', 
			'label' => "human", 
		],
		[
			'value' => 'admin', 
			'label' => "admin", 
		],] ;
	}
	
	public static function status2(){
		return [
		[
			'value' => 'open', 
			'label' => "open", 
		],
		[
			'value' => 'in_progress', 
			'label' => "in_progress", 
		],
		[
			'value' => 'resolved', 
			'label' => "resolved", 
		],
		[
			'value' => 'closed', 
			'label' => "closed", 
		],] ;
	}
	
	public static function category(){
		return [
		[
			'value' => 'billing', 
			'label' => "billing", 
		],
		[
			'value' => 'technical', 
			'label' => "technical", 
		],
		[
			'value' => 'sales', 
			'label' => "sales", 
		],
		[
			'value' => 'other', 
			'label' => "other", 
		],] ;
	}
	
	public static function role(){
		return [
		[
			'value' => 'master_admin', 
			'label' => "master_admin", 
		],
		[
			'value' => 'admin', 
			'label' => "admin", 
		],
		[
			'value' => 'agent', 
			'label' => "agent", 
		],
		[
			'value' => 'user', 
			'label' => "user", 
		],] ;
	}
	
	}
