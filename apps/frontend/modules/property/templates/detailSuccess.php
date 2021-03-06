<?php
/*
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS HEADER.
 *
 * Copyright 1997-2010 Oracle and/or its affiliates. All rights reserved.
 *
 * Oracle and Java are registered trademarks of Oracle and/or its affiliates.
 * Other names may be trademarks of their respective owners.
 *
 * The contents of this file are subject to the terms of either the GNU
 * General Public License Version 2 only ("GPL") or the Common
 * Development and Distribution License("CDDL") (collectively, the
 * "License"). You may not use this file except in compliance with the
 * License. You can obtain a copy of the License at
 * http://www.netbeans.org/cddl-gplv2.html
 * or nbbuild/licenses/CDDL-GPL-2-CP. See the License for the
 * specific language governing permissions and limitations under the
 * License.  When distributing the software, include this License Header
 * Notice in each file and include the License file at
 * nbbuild/licenses/CDDL-GPL-2-CP.  Oracle designates this
 * particular file as subject to the "Classpath" exception as provided
 * by Oracle in the GPL Version 2 section of the License file that
 * accompanied this code. If applicable, add the following below the
 * License Header, with the fields enclosed by brackets [] replaced by
 * your own identifying information:
 * "Portions Copyrighted [year] [name of copyright owner]"
 *
 * Contributor(s):
 *
 * The Original Software is NetBeans. The Initial Developer of the Original
 * Software is Sun Microsystems, Inc. Portions Copyright 1997-2006 Sun
 * Microsystems, Inc. All Rights Reserved.
 *
 * If you wish your version of this file to be governed by only the CDDL
 * or only the GPL Version 2, indicate your decision by adding
 * "[Contributor] elects to include this software in this distribution
 * under the [CDDL or GPL Version 2] license." If you do not indicate a
 * single choice of license, a recipient has the option to distribute
 * your version of this file under either the CDDL, the GPL Version 2 or
 * to extend the choice of license to its licensees as provided above.
 * However, if you add GPL Version 2 code and therefore, elected the GPL
 * Version 2 license, then the option applies only if the new code is
 * made subject to such option by the copyright holder.
 */

/* @var $property Property */
?>
<h1></h1>
<div id="detailbox">
    <div class="detail">
        <h2><?php echo $property->getTitle(); ?>, <?php echo $property->getDisposition(); ?>, <?php echo $property->getFormattedArea() ?>&nbsp;m&sup2;</h2>
        <div class="info">
            <dl>
                <dd>Ref. No:</dd>
                <dt><?php echo $property->getReferenceNo(); ?></dt>

                <dd>Disposition:</dd>
                <dt><?php echo $property->getDisposition(); ?></dt>

                <dd>Area:</dd>
                <dt><?php echo $property->getFormattedArea(); ?> m&sup2;</dt>

                <dd>Floor:</dd>
                <dt><?php echo $property->getFloor(); ?></dt>

                <dd>Lift:</dd>
                <dt><?php echo ($property->getLift()) ? "Yes" : "No"; ?></dt>

                <?php if ($property->getCellar() > 0) { ?>
                    <dd>Cellar:</dd>
                    <dt><?php echo $property->getCellar(); ?> m&sup2;</dt>
                <?php } ?>
                <?php if ($property->getBalcony() > 0) { ?>
                    <dd>Balcony:</dd>
                    <dt><?php echo $property->getBalcony(); ?> m&sup2;</dt>
                <?php } ?>
                <?php if ($property->getTerace() > 0) { ?>
                    <dd>Terrace:</dd>
                    <dt><?php echo $property->getTerace(); ?> m&sup2;</dt>
                <?php } ?>
                <?php if ($property->getLoggia() > 0) { ?>
                    <dd>Loggia:</dd>
                    <dt><?php echo $property->getLoggia(); ?> m&sup2;</dt>
                <?php } ?>
                <?php if ($property->getGarden() > 0) { ?>
                    <dd>Garden:</dd>
                    <dt><?php echo $property->getGarden(); ?> m&sup2;</dt>
                <?php } ?>
                <?php if ($property->getGarage() > 0) { ?>
                    <dd>Garage:</dd>
                    <dt><?php echo $property->getGarage(); ?> m&sup2;</dt>
                <?php } ?>

                <dd>Parking place:</dd>
                <dt><?php echo ($property->getParking_place())? "Yes" : "No"; ?></dt>

                <dd>Building type:</dd>
                <dt><?php echo $property->getPropertyBuild()->getText(); ?></dt>

                <dd>Location:</dd>
                <dt><?php $l = $property->getLocation(); echo $l->getCity() . ", " .$l->getCityPart(); ?></dt>

                <dd><span>Price:</span></dd>
                <dt><span class="price"><?php echo $property->getFormattedPrice(); ?> EUR</span></dt>

            </dl>
            <?php if (!Utils::isInFavorites($property->getId())): ?>
                <a id="p<?php echo $property->getId() ?>" class="ic3 fav" href="#" onclick="return addToFavoritesDetail(<?php echo $property->getId() ?>)" title="Add to favorites">Add to favorites</a>
            <?php else: ?>
                <a id="p<?php echo $property->getId() ?>" class="ic33" href="#" onclick="return removeFromFavoritesDetail(<?php echo $property->getId() ?>)" title="Remove from favorites">Remove from favorites</a>
            <?php endif; ?>

            </p>
        </div>
    </div>
    <div class="cleaner"></div>
    <h3 class="popis">Description</h3>
    <p class="popis"><?php echo str_ireplace('m2', 'm&sup2;', nl2br($property->getText())); ?></p>
</div>
<div class="hr"></div>
