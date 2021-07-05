<?php 
class Solution
{
	/**
	 * @param TreeNode $root
	 * @return Integer[]
	 */
	function inorderTraversal($root)
	{
		$stack = $res = [];
		if ($root == NULL) {
			// code...
			return $res;
		}

		$current = $root;
		while ($current != NULl || !empty($stack)) {
			// code...
			if ($current != NULL) {
				// code...
				array_push($stack, $current);
				$current = $current->left;
			} else {
				$current = array_pop($stack);
				$res[] = $current->val;
				$current = $current->right;
			}
		}

		return $res;
	}
}
