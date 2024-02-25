<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * tb_aldeia_id_suku_option_list Model Action
     * @return array
     */
	function tb_aldeia_id_suku_option_list($lookup_id_postu){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_suku AS value,naran_suku AS label FROM tb_suku WHERE id_postu= ? ORDER BY naran_suku ASC" ;
		$queryparams = array($lookup_id_postu);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_aldeia_id_postu_option_list Model Action
     * @return array
     */
	function tb_aldeia_id_postu_option_list($lookup_id_municipiu){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_postu AS value,naran_postu AS label FROM tb_postu WHERE id_municipiu= ? ORDER BY naran_postu ASC" ;
		$queryparams = array($lookup_id_municipiu);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_aldeia_id_municipiu_option_list Model Action
     * @return array
     */
	function tb_aldeia_id_municipiu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_munucipiu AS value,naran_munucipiu AS label FROM tb_municipiu ORDER BY naran_munucipiu";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_postu_id_municipiu_option_list Model Action
     * @return array
     */
	function tb_postu_id_municipiu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_munucipiu AS value,naran_munucipiu AS label FROM tb_municipiu ORDER BY naran_munucipiu";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_suku_id_postu_option_list Model Action
     * @return array
     */
	function tb_suku_id_postu_option_list($lookup_Id_munucipiu){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_postu AS value,naran_postu AS label FROM tb_postu WHERE id_municipiu= ? ORDER BY naran_postu ASC" ;
		$queryparams = array($lookup_Id_munucipiu);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_suku_Id_munucipiu_option_list Model Action
     * @return array
     */
	function tb_suku_Id_munucipiu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_munucipiu AS value,naran_munucipiu AS label FROM tb_municipiu ORDER BY naran_munucipiu";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_alunmi_id_departamentu_option_list Model Action
     * @return array
     */
	function tb_alunmi_id_departamentu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_departamentu AS value,naran_departamentu AS label FROM tb_departamentu ORDER BY naran_departamentu";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_alunmi_id_municipiu_option_list Model Action
     * @return array
     */
	function tb_alunmi_id_municipiu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_munucipiu AS value,naran_munucipiu AS label FROM tb_municipiu ORDER BY naran_munucipiu";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_alunmi_Id_postu_option_list Model Action
     * @return array
     */
	function tb_alunmi_Id_postu_option_list($lookup_id_municipiu){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_postu AS value,naran_postu AS label FROM tb_postu WHERE id_municipiu= ? ORDER BY naran_postu ASC" ;
		$queryparams = array($lookup_id_municipiu);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_alunmi_id_suku_option_list Model Action
     * @return array
     */
	function tb_alunmi_id_suku_option_list($lookup_Id_postu){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_suku AS value,naran_suku AS label FROM tb_suku WHERE id_postu= ? ORDER BY naran_suku ASC" ;
		$queryparams = array($lookup_Id_postu);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_alunmi_id_aldeia_option_list Model Action
     * @return array
     */
	function tb_alunmi_id_aldeia_option_list($lookup_id_suku){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_aldeia AS value,naran_aldeia AS label FROM tb_aldeia WHERE id_suku= ? ORDER BY naran_aldeia ASC" ;
		$queryparams = array($lookup_id_suku);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_user_username_value_exist Model Action
     * @return array
     */
	function tb_user_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("tb_user");
		return $exist;
	}

	/**
     * tb_user_email_value_exist Model Action
     * @return array
     */
	function tb_user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("tb_user");
		return $exist;
	}

	/**
     * getcount_totaldadusaldeia Model Action
     * @return Value
     */
	function getcount_totaldadusaldeia(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_aldeia";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totalmunicipiu Model Action
     * @return Value
     */
	function getcount_totalmunicipiu(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_municipiu";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totalpostu Model Action
     * @return Value
     */
	function getcount_totalpostu(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_postu";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totalsuku Model Action
     * @return Value
     */
	function getcount_totalsuku(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_suku";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totaldepartamentu Model Action
     * @return Value
     */
	function getcount_totaldepartamentu(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_departamentu";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totaldadusrejistu Model Action
     * @return Value
     */
	function getcount_totaldadusrejistu(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_alunmi";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_tbalunmi Model Action
     * @return Value
     */
	function getcount_tbalunmi(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_alunmi";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
